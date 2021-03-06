<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Helpers\LoadHeader;

class JoinController extends Controller
{
    private $key = '1365f6629c6f0e6ea355ec2b9682fc50';
    protected $params;

    public function index(Request $request)//Вступить в fitron
    {
        $this->params = LoadHeader::Start(6);

        return view('join.join', ['params' => $this->params]);
    }

    public function contact(Request $request) //Контакт
    {
        $request->phone = preg_replace('/[^0-9]/', '', $request->phone);

        $validator = Validator::make($request->all(), [
//            'g-recaptcha-response' => 'required|captcha',
            'surname' => 'required|string|max:60',
            'processing' => 'required|integer|not_in:0',
            'name' => 'required|string|max:50',
            'subject'=> 'required|string|max:200',
            'phone' => 'required|string|max:16',
            'email' => 'required|string|email|max:200'
        ]);

        if($validator->fails()) return back()->withErrors($validator)->withInput();

        $send = [
            'id_send' => 'contact',
            'name' => $request->name,
            'mail' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'surname' => $request->surname,
        ];

        $this->setFirstVisit($request, $send);
        $out = $this->sendPostQuery($send);

        if($this->checkHash($out['remote'], $out['send'])){
            $responce = [ 'success' => 'Ваша заявка скоро пойдет в обработку' ];
        }
        else {
            $responce = [ 'success' => 'Заявка не прошла обработку' ];
        }

        return redirect()->route('contacts_index')->with($responce)->withInput();
    }

    public function signup(Request $request) //Записаться на занятие
    {
        $request->form_sign_up_phone = preg_replace('/[^0-9]/', '', $request->form_sign_up_phone);

        $validator = Validator::make($request->all(), [
//            'g-recaptcha-response' => 'required|captcha',
            'form_sign_up_schedule' => 'required|integer|not_in:0',
            'form_sign_up_agree' => 'required|integer|not_in:0',
            'form_sign_up_name' => 'required|string|max:50',
            'form_sign_up_club'=> 'required|string|max:250',
            'form_sign_up_phone' => 'required|string|max:16',
            'form_sign_up_email' => 'required|string|email|max:200',
            'form_sign_up_text' => 'required|string|max:450',
        ]);

        if($validator->fails()) return json_encode([ 'error' => $validator->errors() ]);
        $sch = \App\Schedule::find($request->form_sign_up_schedule);

        if($sch) {
            $send = [
                'id_send' => 'signup',
                'name' => $request->form_sign_up_name,
                'mail' => $request->form_sign_up_email,
                'phone' => $request->form_sign_up_phone,
                'name_club' => $sch->club->name,
                'name_training' => $sch->training->name,
                'name_mesto' => $sch->room->name,
                'start_date' => $sch->StartDate()->format('Y-m-d h:i:s'),
                'end_date' => $sch->EndDate()->format('Y-m-d h:i:s'),
                'name_intensity' => $sch->intensity->name,
                'text' => $request->form_sign_up_text
            ];

            $this->setFirstVisit($request, $send);
            $out = $this->sendPostQuery($send);

            if($this->checkHash($out['remote'], $out['send'])){
                $responce = ['ok' => 'Ваша заявка скоро пойдет в обработку', 'out' => $out ];
            }
            else {
                $responce = ['ok' => 'Заявка не прошла обработку', 'out' => $out ];
            }
        }
        else {
            $responce = [ 'error' => 'Не найдена запись' ];
        }

        return json_encode($responce);
    }

    public function feedback(Request $request)  //Обратная звонок
    {
        $request->form_feedback_phone = preg_replace('/[^0-9]/', '', $request->form_feedback_phone);

        $validator = Validator::make($request->all(), [
//            'g-recaptcha-response' => 'required|captcha',
            'form_feedback_email' => 'required|string|email|max:250',
            'form_feedback_phone' => 'required|string|max:16',
            'form_feedback_name' => 'required|string|max:250',
            'form_feedback_club' => 'required|string|max:250',
            'form_feedback_agree' => 'required|integer|not_in:0',
        ]);

        if($validator->fails()) return json_encode([ 'error' => $validator->errors() ]);

        $send = [
            'id_send' => 'feedback',
            'name' => $request->form_feedback_name,
            'mail' => $request->form_feedback_email,
            'phone' => $request->form_feedback_phone,
            'id_club' => explode('#', $request->form_feedback_club)[0],
            'name_club' => explode('#', $request->form_feedback_club)[1],
        ];

        $this->setFirstVisit($request, $send);
        $out = $this->sendPostQuery($send);

        if($this->checkHash($out['remote'], $out['send'])){
            $responce = ['ok' => 'Ваша заявка скоро пойдет в обработку', 'out' => $out ];
        }
        else {
            $responce = ['ok' => 'Заявка не прошла обработку', 'out' => $out ];
        }

        return json_encode($responce);
    }

    public function vacancies(Request $request) //Подать заявку
    {
        $allowable_size = 4000000;
        $allowable_ext = ['jpg', 'doc', 'docx', 'pdf', 'txt', 'odt', 'pages'];
        $dir_store = '/FTUploads/send';

        $request->form_vacancies_phone = preg_replace('/[^0-9]/', '', $request->form_vacancies_phone);

        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|captcha',
            'form_vacancies_email' => 'required|string|email|max:250',
            'form_vacancies_phone' => 'required|string|max:16',
            'form_vacancies_name' => 'required|string|max:250',
            'form_vacancies_text' => 'required|string|max:2500',
            'form_vacancies_agree' => 'required|integer|not_in:0',
        ]);

        if($validator->fails()) return json_encode([ 'error' => $validator->errors() ]);

        $file = null; $file_base64 = null; $file_name = null; $file_size = null; $file_ext = null;

        if($request->hasFile('form_vacancies_file')) {
            $file_size = $request->file('form_vacancies_file')->getSize();
            if($allowable_size > $file_size){
                $file_ext = $request->file('form_vacancies_file')->extension();
                if(in_array($file_ext, $allowable_ext)){
                    $file = Storage::url($request->file('form_vacancies_file')->store($dir_store));
                    $file_name = $request->file('form_vacancies_file')->getClientOriginalName();
                    $file_base64 = base64_encode($request->file('form_vacancies_file')->openFile()->fread($file_size));
                    Storage::delete($file);
                }
                else{
                    return json_encode([ 'error' => ['form_vacancies_file' => 'Недопустимый формат файла .' . $file_ext]]);
                }
            }
            else {
                return json_encode([ 'error' => ['form_vacancies_file' => 'Превышен допустимый размер файла (' . $file_size . ')']]);
            }
        }

        $send = [
            'id_send' => 'vacancies',
            'name' => $request->form_vacancies_name,
            'mail' => $request->form_vacancies_email,
            'phone' => $request->form_vacancies_phone,
            'text' => $request->form_vacancies_text,
            'file_base64' => $file_base64,
            'file_name' => $file_name,
            'file_size' => $file_size,
            'file_ext' => $file_ext,
        ];

        $this->setFirstVisit($request, $send);
        $out = $this->sendPostQuery($send);

        if($this->checkHash($out['remote'], $out['send'])){
            $responce = ['ok' => 'Ваша заявка скоро пойдет в обработку', 'out' => $out ];
        }
        else {
            $responce = ['ok' => 'Заявка не прошла обработку', 'out' => $out ];
        }

        return json_encode($responce);
    }

    public function cards(Request $request) //Узнать цену
    {
        $allowable_size = 4000000;
        $allowable_ext = ['jpg', 'doc', 'docx', 'pdf', 'txt', 'odt', 'pages'];
        $dir_store = '/FTUploads/send';

        $request->form_cards_phone = preg_replace('/[^0-9]/', '', $request->form_cards_phone);
        $validator = Validator::make($request->all(), [
//            'g-recaptcha-response' => 'required|captcha',
            'form_cards_club' => 'required|string|max:250',
            'form_cards_email' => 'required|string|email|max:250',
            'form_cards_phone' => 'required|string|max:16',
            'form_cards_name' => 'required|string|max:250',
            'form_cards_text' => 'required|string|max:2500',
            'form_cards_id' => 'required|integer|not_in:0',
            'form_cards_agree' => 'required|integer|not_in:0',
        ]);

        $id_send = false;
        switch($request->form_cards_id){
            case '8':
                $id_send = 'individual_card';   //УЗНАТЬ ЦЕНУ ИНДИВИДУАЛЬНОЙ КАРТЫ
                break;
            case '9':
                $id_send = 'vip_card';          //УЗНАТЬ ЦЕНУ VIP КАРТЫ
                break;
            case '10':
                $id_send = 'comfort_card';      //УЗНАТЬ ЦЕНУ COMFORT (OFF PEAK) КАРТЫ
                break;
            case '11':
                $id_send = 'teen_card';         //УЗНАТЬ ЦЕНУ TEEN КАРТЫ
                break;
            case '12':
                $id_send = 'kids_card';         //УЗНАТЬ ЦЕНУ KIDS КАРТЫ
                break;
            case '13':
                $id_send = 'corporate_card';    //УЗНАТЬ УСЛОВИЯ НА КОРПОРАТИВНЫЙ ФИТНЕС
                break;
            default:
                $id_send = false;
                break;
        }
        if(!$id_send) return json_encode([ 'error' => ['form_cards_id' => 'Неизвестный номер карты.' ]]);
        if($validator->fails()) return json_encode([ 'error' => $validator->errors() ]);
        $file = null; $file_base64 = null; $file_name = null; $file_size = null; $file_ext = null;
        $form_file = $request->file('form_cards_file');
        if($request->hasFile('form_cards_file')) {
            $file_size = $form_file->getSize();
            if($allowable_size > $file_size){
                $file_ext = $form_file->extension();
                if(in_array($file_ext, $allowable_ext)){
                    $file = Storage::url($form_file->store($dir_store));
                    $file_name = $form_file->getClientOriginalName();
                    $file_base64 = base64_encode($form_file->openFile()->fread($file_size));
                    Storage::delete($file);
                }
                else{
                    return json_encode([ 'error' => ['form_cards_file' => 'Недопустимый формат файла .' . $file_ext]]);
                }
            }
            else {
                return json_encode([ 'error' => ['form_cards_file' => 'Превышен допустимый размер файла (' . $file_size . ')']]);
            }
        }

        $send = [
            'id_send' => $id_send,
            'id_club' => explode('#', $request->form_cards_club)[0],
            'name_club' => explode('#', $request->form_cards_club)[1],
            'name' => $request->form_cards_name,
            'mail' => $request->form_cards_email,
            'phone' => $request->form_cards_phone,
            'text' => $request->form_cards_text,
            'file_base64' => $file_base64,
            'file_name' => $file_name,
            'file_size' => $file_size,
            'file_ext' => $file_ext,
        ];

        $this->setFirstVisit($request, $send);
        $out = $this->sendPostQuery($send);

        if($this->checkHash($out['remote'], $out['send'])){
            $responce = ['ok' => 'Ваша заявка скоро пойдет в обработку', 'out' => $out ];
        }
        else {
            $responce = ['ok' => 'Заявка не прошла обработку', 'out' => $out ];
        }

        return json_encode($responce);
    }

    public function corporate(Request $request)
    {
        $allowable_size = 4000000;
        $allowable_ext = ['jpg', 'jpeg', 'doc', 'docx', 'pdf', 'txt', 'odt', 'pages'];
        $dir_store = '/FTUploads/send';

        $request->form_corporate_phone = preg_replace('/[^0-9]/', '', $request->form_corporate_phone);
        $validator = Validator::make($request->all(), [
//            'g-recaptcha-response' => 'required|captcha',
            'form_corporate_club' => 'required|string|max:250',
            'form_corporate_email' => 'required|string|email|max:250',
            'form_corporate_phone' => 'required|string|max:16',
            'form_corporate_name' => 'required|string|max:250',
            'form_corporate_text' => 'required|string|max:2500',
            'form_corporate_id' => 'required|integer|not_in:0',
            'form_corporate_agree' => 'required|integer|not_in:0',
        ]);
        $id_send = false;
        switch($request->form_corporate_id){
            case '101':
                $id_send = 'apply';             //подать заявку
                break;
            case '102':
                $id_send = 'condition';         //узнать условия
                break;
            default:
                $id_send = false;
                break;
        }
        if(!$id_send) return json_encode([ 'error' => ['form_cards_id' => 'Неизвестный номер запроса.' ]]);
        if($validator->fails()) return json_encode([ 'error' => $validator->errors() ]);
        $file = null; $file_base64 = null; $file_name = null; $file_size = null; $file_ext = null;
        $form_file = $request->file('form_corporate_file');
        if($request->hasFile('form_corporate_file')) {
            $file_size = $form_file->getSize();
            if($allowable_size > $file_size){
                $file_ext = $form_file->extension();
                if(in_array($file_ext, $allowable_ext)){
                    $file = Storage::url($form_file->store($dir_store));
                    $file_name = $form_file->getClientOriginalName();
                    $file_base64 = base64_encode($form_file->openFile()->fread($file_size));
                    Storage::delete($file);
                }
                else{
                    return json_encode([ 'error' => ['form_corporate_file' => 'Недопустимый формат файла .' . $file_ext]]);
                }
            }
            else {
                return json_encode([ 'error' => ['form_corporate_file' => 'Превышен допустимый размер файла (' . $file_size . ')']]);
            }
        }
        $send = [
            'id_send' => $id_send,
            'id_club' => explode('#', $request->form_corporate_club)[0],
            'name_club' => explode('#', $request->form_corporate_club)[1],
            'name' => $request->form_corporate_name,
            'mail' => $request->form_corporate_email,
            'phone' => $request->form_corporate_phone,
            'text' => $request->form_corporate_text,
            'file_base64' => $file_base64,
            'file_name' => $file_name,
            'file_size' => $file_size,
            'file_ext' => $file_ext,
        ];
        $this->setFirstVisit($request, $send);
        $out = $this->sendPostQuery($send);

        if($this->checkHash($out['remote'], $out['send'])){
            $responce = ['ok' => 'Ваша заявка скоро пойдет в обработку', 'out' => $out ];
        }
        else {
            $responce = ['ok' => 'Заявка не прошла обработку', 'out' => $out ];
        }

        return json_encode($responce);
    }

    public function training(Request $request)  //Узнать о тренировки
    {
        $allowable_size = 4000000;
        $allowable_ext = ['jpg', 'jpeg', 'doc', 'docx', 'pdf', 'txt', 'odt', 'pages'];
        $dir_store = '/FTUploads/send';

        $request->form_training_phone = preg_replace('/[^0-9]/', '', $request->form_training_phone);

        $validator = Validator::make($request->all(), [
//            'g-recaptcha-response' => 'required|captcha',
            'form_training_id' => 'required|integer|not_in:0',
            'form_training_id_name' => 'required|string|max:250',
            'form_training_club' => 'required|string|max:250',
            'form_training_email' => 'required|string|email|max:250',
            'form_training_phone' => 'required|string|max:16',
            'form_training_name' => 'required|string|max:250',
            'form_training_text' => 'required|string|max:2500',
            'form_training_agree' => 'required|integer|not_in:0',
        ]);

        if($validator->fails()) return json_encode([ 'error' => $validator->errors() ]);

        $file = null; $file_base64 = null; $file_name = null; $file_size = null; $file_ext = null;
        $form_file = $request->file('form_training_file');

        if($request->hasFile('form_training_file')) {
            $file_size = $form_file->getSize();
            if($allowable_size > $file_size){
                $file_ext = $form_file->extension();
                if(in_array($file_ext, $allowable_ext)){
                    $file = Storage::url($form_file->store($dir_store));
                    $file_name = $form_file->getClientOriginalName();
                    $file_base64 = base64_encode($form_file->openFile()->fread($file_size));
                    Storage::delete($file);
                }
                else{
                    return json_encode([ 'error' => ['form_training_file' => 'Недопустимый формат файла .' . $file_ext]]);
                }
            }
            else {
                return json_encode([ 'error' => ['form_training_file' => 'Превышен допустимый размер файла (' . $file_size . ')']]);
            }
        }

        $send = [
            'id_send' => 'training',
            'id_training' => $request->form_training_id,
            'name_training' => $request->form_training_id_name,
            'id_club' => explode('#', $request->form_training_club)[0],
            'name_club' => explode('#', $request->form_training_club)[1],
            'name' => $request->form_training_name,
            'mail' => $request->form_training_email,
            'phone' => $request->form_training_phone,
            'text' => $request->form_training_text,
            'file_base64' => $file_base64,
            'file_name' => $file_name,
            'file_size' => $file_size,
            'file_ext' => $file_ext,
        ];

        $this->setFirstVisit($request, $send);
        $out = $this->sendPostQuery($send);

        if($this->checkHash($out['remote'], $out['send'])){
            $responce = ['ok' => 'Ваша заявка скоро пойдет в обработку', 'out' => $out ];
        }
        else {
            $responce = ['ok' => 'Заявка не прошла обработку', 'out' => $out ];
        }

        return json_encode($responce);
    }

    public function special(Request $request)  //Купить в рассрочку или Уточнить
    {
        $request->form_special_phone = preg_replace('/[^0-9]/', '', $request->form_special_phone);

        $validator = Validator::make($request->all(), [
//            'g-recaptcha-response' => 'required|captcha',
            'form_special_id' => 'required|integer|not_in:0',
//            'form_special_id_name' => 'required|string|max:250',
            'form_special_club' => 'required|string|max:250',
            'form_special_email' => 'required|string|email|max:250',
            'form_special_phone' => 'required|string|max:16',
            'form_special_name' => 'required|string|max:250',
            'form_special_text' => 'required|string|max:2500',
            'form_special_agree' => 'required|integer|not_in:0',
        ]);

        if($validator->fails()) return json_encode([ 'error' => $validator->errors() ]);

        $special = \App\Special::find($request->form_special_id);
        $type_card = $special->type_card;

        $send = [
            'id_send' => $special->rassrochka ? 'bay' : 'specify',
            'id_special' => $request->form_special_id,
            'name_special' => $special->name,
            'id_type_card' => $type_card->id,
            'name_type_card' => $type_card->name,
            'price' => $special->price_2,
            'discount' => $special->price_1,
            'id_club' => explode('#', $request->form_special_club)[0],
            'name_club' => explode('#', $request->form_special_club)[1],
            'name' => $request->form_special_name,
            'mail' => $request->form_special_email,
            'phone' => $request->form_special_phone,
            'text' => $special->name . ' '
                . $special->description . ' '
                . $special->price_2 . ' '
                . $special->price_1 . ', '
                . $request->form_special_text,
        ];

        $this->setFirstVisit($request, $send);
        $out = $this->sendPostQuery($send);

        if($this->checkHash($out['remote'], $out['send'])){
            $responce = ['ok' => 'Ваша заявка скоро пойдет в обработку', 'out' => $out ];
        }
        else {
            $responce = ['ok' => 'Заявка не прошла обработку', 'out' => $out ];
        }

        return json_encode($responce);
    }

    public function trainer(Request $request)  //Вопрос тренеру
    {
        $request->form_trainer_phone = preg_replace('/[^0-9]/', '', $request->form_trainer_phone);

        $validator = Validator::make($request->all(), [
//            'g-recaptcha-response' => 'required|captcha',
            'form_query_trainer_email' => 'required|string|email|max:250',
            'form_query_trainer_phone' => 'required|string|max:16',
            'form_query_trainer_name' => 'required|string|max:250',
            'form_query_trainer_text' => 'required|string|max:2500',
            'form_query_trainer_agree' => 'required|integer|not_in:0',
//            'form_trainer_id' => 'required|integer|not_in:0',
            'form_query_trainer_club' => 'required|string|max:250',
        ]);

        if($validator->fails()) return json_encode([ 'error' => $validator->errors() ]);

        $send = [
            'id_send' => 'query_trainer',
            'name_club' => explode('#', $request->form_query_trainer_club)[1],
            'name' => $request->form_query_trainer_name,
            'mail' => $request->form_query_trainer_email,
            'phone' => $request->form_query_trainer_phone,
            'text' => $request->form_query_trainer_text,
        ];

        $this->setFirstVisit($request, $send);
        $out = $this->sendPostQuery($send);

        if($this->checkHash($out['remote'], $out['send'])){
            $responce = ['ok' => 'Ваша заявка скоро пойдет в обработку', 'out' => $out ];
        }
        else {
            $responce = ['ok' => 'Заявка не прошла обработку', 'out' => $out ];
        }

        return json_encode($responce);
    }

    public function join(Request $request)  //Вступить в FITRON
    {
        $request->form_join_phone = preg_replace('/[^0-9]/', '', $request->form_join_phone);
        $validator = Validator::make($request->all(), [
//            'g-recaptcha-response' => 'required|captcha',
            'form_join_email' => 'required|string|email|max:250',
            'form_join_phone' => 'required|string|max:16',
            'form_join_name' => 'required|string|max:250',
            'form_join_club' => 'required|string|max:250',
            'form_join_text' => 'required|string|max:2500',
            'form_join_agree' => 'required|integer|not_in:0',
        ]);

        if($validator->fails()) return json_encode([ 'error' => $validator->errors() ]);

        $send = [
            'id_send' => 'join',
            'id_club' => explode('#', $request->form_join_club)[0],
            'name_club' => explode('#', $request->form_join_club)[1],
            'name' => $request->form_join_name,
            'mail' => $request->form_join_email,
            'phone' => $request->form_join_phone,
            'text' => $request->form_join_text,
        ];

        $this->setFirstVisit($request, $send);
        $out = $this->sendPostQuery($send);

        if($this->checkHash($out['remote'], $out['send'])){
            $responce = ['ok' => 'Ваша заявка скоро пойдет в обработку', 'out' => $out ];
        }
        else {
            $responce = ['ok' => 'Заявка не прошла обработку', 'out' => $out ];
        }

        return json_encode($responce);
    }

    public function guestvisit(Request $request)  //Гостевой визит
    {
        $request->form_join_phone = preg_replace('/[^0-9]/', '', $request->form_join_phone);

        $validator = Validator::make($request->all(), [
//            'g-recaptcha-response' => 'required|captcha',
            'form_guest_visit_email' => 'required|string|email|max:250',
            'form_guest_visit_phone' => 'required|string|max:16',
            'form_guest_visit_name' => 'required|string|max:250',
            'form_guest_visit_club' => 'required|string|max:250',
            'form_guest_visit_agree' => 'required|integer|not_in:0',
        ]);

        if($validator->fails()) return json_encode([ 'error' => $validator->errors() ]);

        $send = [
            'id_send' => 'guestvisit',
            'id_club' => explode('#', $request->form_guest_visit_club)[0],
            'name_club' => explode('#', $request->form_guest_visit_club)[1],
            'name' => $request->form_guest_visit_name,
            'mail' => $request->form_guest_visit_email,
            'phone' => $request->form_guest_visit_phone,
        ];

        $this->setFirstVisit($request, $send);
        $out = $this->sendPostQuery($send);

        if($this->checkHash($out['remote'], $out['send'])){
            $responce = ['ok' => 'Ваша заявка скоро пойдет в обработку', 'out' => $out ];
        }
        else {
            $responce = ['ok' => 'Заявка не прошла обработку', 'out' => $out ];
        }

        return json_encode($responce);
    }

    private function sendPostQuery($send)
    {
        $date = new \DateTime();
        $send['date'] = $date->format('Y-m-d H:i:s') ;

        list($send['n_send'], $send['hash']) = $this->createHash($send['id_send']);

        $url_send = 'http://service.fitron.club/sight.php';
        $send_json = array('query' => json_encode($send));

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url_send);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $send_json);
        $remote = curl_exec($curl);
        curl_close($curl);

        return [ 'remote' => json_decode($remote), 'send' => $send ];
    }

    private function setFirstVisit(Request $request, &$send)
    {
        $send['server_name'] = $request->server('SERVER_NAME');
        $send['request_uri'] = $request->server('REQUEST_URI');
        $send['device'] = $request->session()->get('device');                    //Device name
        $send['platform'] = $request->session()->get('platform');                //Operating system name
        $send['platform_version'] = $request->session()->get('platform_version');//Platform version
        $send['browser'] = $request->session()->get('browser');                  //Browser name
        $send['browser_version'] = $request->session()->get('browser_version');  //Browser version
        $send['is_desktop'] = $request->session()->get('is_desktop');            //Desktop detection
        $send['is_phone'] = $request->session()->get('is_desktop');              //Phone detection
        $send['is_robot'] = $request->session()->get('is_robot');                //Robot detection
        $send['client_ip'] = $request->session()->get('addr');
        $send['user_agent'] = $request->session()->get('user-agent');
        $send['reffer'] = $request->session()->get('reffer');
        $send['uri'] = $request->session()->get('uri');
        $send['query'] = $request->session()->get('query');
    }

    private function createHash($id_send)
    {
        $t = microtime();
        $n_send = (explode(' ', $t)[1]) . (explode('.', explode(' ', $t)[0])[1]);
        $hash = md5($id_send . $this->key . $n_send);

        return [ $n_send, $hash ];
    }

    private function checkHash($remote, $send)
    {
        return isset($remote->hash) && isset($remote->n_send) && $remote->hash == md5($send['id_send'] . $this->key . $remote->n_send);
    }
}
