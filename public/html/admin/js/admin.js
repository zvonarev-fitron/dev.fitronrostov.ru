if(typeof FTAdmin !== "undefined") {
    console.log('Объект FTAdmin определен');
}
else{
    //console.log('Создаем объект FTAdmin');
    var FTAdmin = {
        me: {},
        schedule_date: {
            day: 0,
            month: 0,
            year: 0
        },
        select_table: {
            club: 0,
            page: 0,
            sliders: 0,
            slider: 0,
            image: 0,
            category: 0,
            training: 0,
            doing: 0,
            infrastructure_club: 0,
            infrastructure: 0,
            uncos: 0,
            trainer_club: 0,
            trainer_type: '',
            trainer: 0,
            room_club: 0,
            room: 0,
            schedule_club: 0,
            schedule: 0,
            user: 0,
            role: 0
        },
        res: {
            class_menu_left: 'FTAdmin-menu_panel_left',
            class_active: 'active',
            content: { id: 'content' },
            user: {
                id: 'menu_users',
                select_class: 'user-tr_click__select'
            },
            role: {
                id: 'menu_roles',
                select_class: 'user-tr_click__select'
            },
            club: {
                id: 'menu_clubs',
                select_class: 'club-tr_click__select'
            },
            page: {
                id: 'menu_pages',
                select_class: 'page-tr_click__select'
            },
            category:{
                select_class: 'category-tr_click__select'
            },
            fitne: {
                id: 'menu_fitnes',
                categories: {},
            },
            sliders: {
                id: 'menu_sliders',
                slider: {},
                select_class: 'slider-tr_click__select'
            },
            image: {
                select_class: 'image-tr_click__select'
            },
            training: {
                select_class: 'trainings-tr_click__select'
            },
            trainings: {},
            doing: {
                id: 'menu_doings',
                select_class: 'doing-page-tr_click__select'
            },
            blog: { id: 'menu_blogs' },
            uncos: {
                id: 'menu_news',
                select_class: 'uncos-tr_click__select'
            },
            special: { id: 'menu_special'},
            infrastructure: {
                id: 'menu_infrastructure',
                clubs: {},
                select_class: 'infrastructures-tr_click__select'
            },
            trainer: {
                id: 'menu_trainer',
                clubs: {},
                typetrainer: {},
                select_class: 'trainer-tr_click__select'
            },
            room: {
                id: 'menu_room',
                clubs: {},
                select_class: 'room-tr_click__select'
            },

            schedule: {
                id: 'menu_schedule',
                clubs: {},
                select_class: 'schedule-tr_click__select'
            },
        },

        Init: function(){
            this.res.content.el = document.querySelector('#' + this.res.content.id);

            //Инициализация левого меню
            //Пользователи
            this.res.user.el = document.querySelector('#' + this.res.user.id);
            this.res.user.el.classList.add(this.res.class_menu_left);
            this.handlers.users(this.res.user.el, this.res.content.el, this.res.class_active);
            //Роли
            this.res.role.el = document.querySelector('#' + this.res.role.id);
            this.res.role.el.classList.add(this.res.class_menu_left);
            this.handlers.roles(this.res.role.el, this.res.content.el, this.res.class_active);
            //Клубы
            this.res.club.el = document.querySelector('#' + this.res.club.id);
            this.res.club.el.classList.add(this.res.class_menu_left);
            this.handlers.clubs(this.res.club.el, this.res.content.el, this.res.class_active);
            //Страницы
            this.res.page.el = document.querySelector('#' + this.res.page.id);
            this.res.page.el.classList.add(this.res.class_menu_left);
            this.handlers.pages(this.res.page.el, this.res.content.el, this.res.class_active);
            //Фитнес программы
            this.res.fitne.el = document.querySelector('#' + this.res.fitne.id);
            this.res.fitne.el.classList.add(this.res.class_menu_left);
            this.handlers.fitnes(this.res.fitne.el, this.res.content.el, this.res.class_active);
            //Расписание
            this.res.schedule.el = document.querySelector('#' + this.res.schedule.id);
            this.res.schedule.el.classList.add(this.res.class_menu_left);
            this.handlers.schedule(this.res.schedule.el, this.res.content.el, this.res.class_active);
            //Инфраструктура
            this.res.infrastructure.el = document.querySelector('#' + this.res.infrastructure.id);
            this.res.infrastructure.el.classList.add(this.res.class_menu_left);
            this.handlers.infrastructures(this.res.infrastructure.el, this.res.content.el, this.res.class_active);
            //Слайдеры
            this.res.sliders.el = document.querySelector('#' + this.res.sliders.id);
            this.res.sliders.el.classList.add(this.res.class_menu_left);
            this.handlers.sliders(this.res.sliders.el, this.res.content.el, this.res.class_active);
            //События
            this.res.doing.el = document.querySelector('#' + this.res.doing.id);
            this.res.doing.el.classList.add(this.res.class_menu_left);
            this.handlers.doings(this.res.doing.el, this.res.content.el, this.res.class_active);
            //Блог
            this.res.blog.el = document.querySelector('#' + this.res.blog.id);
            this.res.blog.el.classList.add(this.res.class_menu_left);
            this.handlers.blogs(this.res.blog.el, this.res.content.el, this.res.class_active);
            //Новости
            this.res.uncos.el = document.querySelector('#' + this.res.uncos.id);
            this.res.uncos.el.classList.add(this.res.class_menu_left);
            this.handlers.uncos(this.res.uncos.el, this.res.content.el, this.res.class_active);
            //Акции
            this.res.special.el = document.querySelector('#' + this.res.special.id);
            this.res.special.el.classList.add(this.res.class_menu_left);
            this.handlers.special(this.res.special.el, this.res.content.el, this.res.class_active);
            //Тренеры
            this.res.trainer.el = document.querySelector('#' + this.res.trainer.id);
            this.res.trainer.el.classList.add(this.res.class_menu_left);
            this.handlers.trainer(this.res.trainer.el, this.res.content.el, this.res.class_active);
            //Место
            this.res.room.el = document.querySelector('#' + this.res.room.id);
            this.res.room.el.classList.add(this.res.class_menu_left);
            this.handlers.room(this.res.room.el, this.res.content.el, this.res.class_active);
        },

        LeftMenuActiveClearAll: function(el){
            var els = document.querySelectorAll('.' + this.res.class_menu_left);
            if(0 < els.length) for(var i = 0; i < els.length; i++) els[i].classList.remove(this.res.class_active);
            if(el) el.classList.add(this.res.class_active);
        },

        LeftMenuActive: function(el, act){
            var result = false;
            if(!el.classList.contains(act)) {
                FTAdmin.LeftMenuActiveClearAll(el);
                result = true;
            }
            return result;
        },

        TableTrClearSelect: function(tbl, mn ){
            var els = document.querySelectorAll(tbl + ' tr');
            var cl = this.res[mn].select_class;
            var id = this.select_table[mn];
            for(var i = 0; i < els.length; i++) {
                if(id == parseInt(els[i].firstElementChild.innerHTML, 10)){
                    els[i].classList.add(cl);
                }
                else {
                    els[i].classList.remove(cl);
                }
            }
        },

        //Обработчики
        handlers: {
            //Пользователи
            users: function(el, content, active){
                el.addEventListener('click', function(event){
                    event.stopPropagation();
                    if(FTAdmin.LeftMenuActive(event.target, active)){
                        FTAdmin.AjaxSend('GET', '/admin/users/', '', content);
                    }
                });
            },
            //Роли
            roles: function(el, content, active){
                el.addEventListener('click', function(event){
                    event.stopPropagation();
                    if(FTAdmin.LeftMenuActive(event.target, active)){
                        FTAdmin.AjaxSend('GET', '/admin/roles/', '', content);
                    }
                });
            },
            //Клубы
            clubs: function(el, content, active){
                el.addEventListener('click', function(event){
                    event.stopPropagation();
                    if(FTAdmin.LeftMenuActive(event.target, active)){
                        FTAdmin.AjaxSend('GET', '/admin/clubs/', '', content);
                    }
                });
            },
            //Страницы
            pages: function(el, content, active){
                el.addEventListener('click', function(event){
                    event.stopPropagation();
                    if(FTAdmin.LeftMenuActive(event.target, active)){
                        FTAdmin.AjaxSend('GET', '/admin/pages/', '', content);
                    }
                });
            },
            //Фитнес программы
            fitnes: function(el, content, active){
                el.addEventListener('click', function(event){
                    if(FTAdmin.LeftMenuActive(event.target, active)){
                        FTAdmin.AjaxSend('GET', '/admin/categories/', '', FTAdmin.res.content.el);
                        // console.log(content);
                        // content.innerHTML = '<h1>Вы выбрали пункт меню - Фитнес</h1>';
                    }
                });
                for(var nc in FTAdmin.res.fitne.categories){
                    FTAdmin.res.fitne.categories[nc].el = document.querySelector('#' + FTAdmin.res.fitne.categories[nc].id);
                    FTAdmin.res.fitne.categories[nc].el.classList.add(FTAdmin.res.class_menu_left);
                    FTAdmin.res.fitne.categories[nc].el.addEventListener('click', function(event){
//                        event.stopPropagation();
                        if(FTAdmin.LeftMenuActive(event.target, active)){
                            FTAdmin.select_table.category = parseInt(event.target.id.split('_')[1]);
                            if(0 < FTAdmin.select_table.category)
                                 FTAdmin.AjaxSend('GET', '/admin/trainings/' + FTAdmin.select_table.category + '/', '', FTAdmin.res.content.el);
                        }
                    });
                };
                for(var nt in FTAdmin.res.trainings){
                    FTAdmin.res.trainings[nt].el = document.querySelector('#' + FTAdmin.res.trainings[nt].id);
                    FTAdmin.res.trainings[nt].el.classList.add(FTAdmin.res.class_menu_left);
                    FTAdmin.res.trainings[nt].el.addEventListener('click', function(event){
                        event.stopPropagation();
                        if(FTAdmin.LeftMenuActive(event.target, active)){
                            FTAdmin.select_table.training = parseInt(event.target.id.split('_')[1]);
                            if(0 < FTAdmin.select_table.training)
                                FTAdmin.AjaxSend('GET', '/admin/trainings/' + FTAdmin.select_table.training + '/edit/', '', FTAdmin.res.content.el);
                        }
                    });
                };
            },
            //Тренеры
            trainer: function(el, content, active){
                el.addEventListener('click', function(event){
                    if(FTAdmin.LeftMenuActive(event.target, active)){
                        FTAdmin.AjaxSend('GET', '/admin/trainer/clubs/itogo/', '', FTAdmin.res.content.el);
                    }
                });
                for(var nc in FTAdmin.res.trainer.clubs){
                    FTAdmin.res.trainer.clubs[nc].el = document.querySelector('#' + FTAdmin.res.trainer.clubs[nc].id);
                    FTAdmin.res.trainer.clubs[nc].el.classList.add(FTAdmin.res.class_menu_left);
                    FTAdmin.res.trainer.clubs[nc].el.addEventListener('click', function(event){
//                        event.stopPropagation();
                        if(FTAdmin.LeftMenuActive(event.target, active)){
//                            console.log(event.target);
                            FTAdmin.select_table.trainer_club = parseInt(event.target.id.split('_')[2]);
                            if(0 < FTAdmin.select_table.trainer_club)
                                FTAdmin.AjaxSend('GET', '/admin/trainer/type/itogo/' + FTAdmin.select_table.trainer_club + '/', '', FTAdmin.res.content.el);
                        }
                    });
                };
                for(var nt in FTAdmin.res.trainer.typetrainer){
                    FTAdmin.res.trainer.typetrainer[nt].el = document.querySelector('#' + FTAdmin.res.trainer.typetrainer[nt].id);
                    FTAdmin.res.trainer.typetrainer[nt].el.classList.add(FTAdmin.res.class_menu_left);
                    FTAdmin.res.trainer.typetrainer[nt].el.addEventListener('click', function(event){
//                        event.stopPropagation();
//                        console.log(event.target);
                         if(FTAdmin.LeftMenuActive(event.target, active)){
                             console.log(event.target);
                             ids = event.target.id.split('_');
                             FTAdmin.select_table.trainer_club = ids[1];
                             FTAdmin.select_table.trainer_type = ids[1] + '_' + ids[2];
                        //     FTAdmin.select_table.training = parseInt(event.target.id.split('_')[1]);
                            if(FTAdmin.select_table.trainer_type)
                                FTAdmin.AjaxSend('GET', '/admin/trainer/' + FTAdmin.select_table.trainer_type + '/', '', FTAdmin.res.content.el);
                         }
                    });
                };
            },


            //Место
            room: function(el, content, active){
                el.addEventListener('click', function(event){
                    if(FTAdmin.LeftMenuActive(event.target, active)){
                        FTAdmin.AjaxSend('GET', '/admin/rooms/', '', FTAdmin.res.content.el);
                    }
                });
                for(var nc in FTAdmin.res.room.clubs){
                    FTAdmin.res.room.clubs[nc].el = document.querySelector('#' + FTAdmin.res.room.clubs[nc].id);
                    FTAdmin.res.room.clubs[nc].el.classList.add(FTAdmin.res.class_menu_left);
                    FTAdmin.res.room.clubs[nc].el.addEventListener('click', function(event){
//                        event.stopPropagation();
                        if(FTAdmin.LeftMenuActive(event.target, active)){
//                            console.log(event.target);
                            FTAdmin.select_table.room_club = parseInt(event.target.id.split('_')[2]);
                            if(0 < FTAdmin.select_table.room_club)
                                 FTAdmin.AjaxSend('GET', '/admin/rooms/' + FTAdmin.select_table.room_club + '/', '', FTAdmin.res.content.el);
                        }
                    });
                };
            },
            //Расписание
            schedule: function(el, content, active){
                el.addEventListener('click', function(event){
                    if(FTAdmin.LeftMenuActive(event.target, active)){
//                        FTAdmin.AjaxSend('GET', '/admin/schedule/', '', content);
//                        console.log(content);
                        content.innerHTML = '<h1>Выберите в меню "Расписание" клуб</h1>';
                    }
                });
                for(var nc in FTAdmin.res.schedule.clubs){
                    FTAdmin.res.schedule.clubs[nc].el = document.querySelector('#' + FTAdmin.res.schedule.clubs[nc].id);
                    FTAdmin.res.schedule.clubs[nc].el.classList.add(FTAdmin.res.class_menu_left);
                    FTAdmin.res.schedule.clubs[nc].el.addEventListener('click', function(event){
//                        event.stopPropagation();
                        if(FTAdmin.LeftMenuActive(event.target, active)){
//                            console.log(event.target);
                            FTAdmin.select_table.schedule_club = parseInt(event.target.id.split('_')[2]);
                            if(0 < FTAdmin.select_table.schedule_club)
//                                content.innerHTML = '<h1>Вы выбрали пункт меню - Расписание - ' + FTAdmin.select_table.schedule_club + '</h1>';
                                FTAdmin.AjaxSend('GET', '/admin/calendar/' + FTAdmin.select_table.schedule_club + '/', '', FTAdmin.res.content.el);
                        }
                    });
                };
            },
            //Инфраструктуре
            infrastructures:function(el, content, active){
                el.addEventListener('click', function(event){
                    if(FTAdmin.LeftMenuActive(event.target, active)){
//                        FTAdmin.AjaxSend('GET', '/admin/sliders/', '', content);
//                         console.log(content);

                        content.innerHTML = '<h2>Вы выбрали пункт меню - Инфраструктура</h2><h2>Для продолжения работы выберите клуб</h2>';
                    }
                });
                for(var nc in FTAdmin.res.infrastructure.clubs){
                    FTAdmin.res.infrastructure.clubs[nc].el = document.querySelector('#' + FTAdmin.res.infrastructure.clubs[nc].id);
                    FTAdmin.res.infrastructure.clubs[nc].el.classList.add(FTAdmin.res.class_menu_left);
                    FTAdmin.res.infrastructure.clubs[nc].el.addEventListener('click', function(event, nc){
                        event.stopPropagation();
                        if(FTAdmin.LeftMenuActive(event.target, active)){
                            FTAdmin.select_table.infrastructure_club = parseInt(event.target.id.split('_')[2]);
                            if(0 < FTAdmin.select_table.infrastructure_club){
                                FTAdmin.AjaxSend('GET', '/admin/infrastructures/' + FTAdmin.select_table.infrastructure_club + '/', '', FTAdmin.res.content.el);
                            }
                        }
                    });
                }
            },
            //Слайдеры
            sliders: function(el, content, active){
                el.addEventListener('click', function(event){
                    if(FTAdmin.LeftMenuActive(event.target, active)){
                        FTAdmin.AjaxSend('GET', '/admin/sliders/', '', content);
                        // console.log(content);
                        // content.innerHTML = '<h1>Вы выбрали пункт меню - Слайдеры</h1>';
                    }
                });
                for(var ns in FTAdmin.res.sliders.slider){
                    FTAdmin.res.sliders.slider[ns].el = document.querySelector('#' + FTAdmin.res.sliders.slider[ns].id);
                    FTAdmin.res.sliders.slider[ns].el.classList.add(FTAdmin.res.class_menu_left);
                    FTAdmin.res.sliders.slider[ns].el.addEventListener('click', function(event, ns){
                            event.stopPropagation();
                            if(FTAdmin.LeftMenuActive(event.target, active)){
                                FTAdmin.select_table.slider = parseInt(event.target.id.split('_')[1]);
                                if(0 < FTAdmin.select_table.slider)
                                    //FTAdmin.AjaxSend('GET', '/admin/images/', '', FTAdmin.res.content.el);
                                    FTAdmin.AjaxSend('GET', '/admin/images/' + FTAdmin.select_table.slider + '/', '', FTAdmin.res.content.el);
                            }
                        });
                }
            },
            //События
            doings: function(el, content, active){
                el.addEventListener('click', function(event){
                    event.stopPropagation();
                    if(FTAdmin.LeftMenuActive(event.target, active)){
                        FTAdmin.AjaxSend('GET', '/admin/doings/', '', content);
                        // console.log(content);
                        // content.innerHTML = '<h1>Вы выбрали пункт меню - События</h1>';
                    }
                });
            },
            //Блог
            blogs: function(el, content, active){
                el.addEventListener('click', function(event){
                    event.stopPropagation();
                    if(FTAdmin.LeftMenuActive(event.target, active)){
                        console.log(content);
                        content.innerHTML = '<h1>Вы выбрали пункт меню - Блог</h1>';
                    }
                });
            },
            //Новости
            uncos: function(el, content, active){
                el.addEventListener('click', function(event){
                    event.stopPropagation();
                    if(FTAdmin.LeftMenuActive(event.target, active)){
                        // console.log(content);
                        // content.innerHTML = '<h1>Вы выбрали пункт меню - Новости</h1>';
                        FTAdmin.AjaxSend('GET', '/admin/uncos/', '', content);
                    }
                });
            },
            //Акции
            special: function(el, content, active){
                el.addEventListener('click', function(event){
                    event.stopPropagation();
                    if(FTAdmin.LeftMenuActive(event.target, active)){
                        FTAdmin.AjaxSend('GET', '/admin/special/', '', content);
                    }
                });
            },
        },
        AjaxSend: function(method, action, data, content, ajax=false){
            var xhr = new XMLHttpRequest();
            var th = this;
            xhr.open(method, action, true);

            //xhr.setRequestHeader('X-REQUEST-WITH', 'XMLHttpRequest');

            if(ajax) xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

            xhr.onload = function(){
                if(xhr.readyState == 4 && xhr.status == 404){
                    content.innerHTML = '<h2>Ошибка загрузки страницы(404)</h2>';
                }
                if(xhr.readyState == 4 && xhr.status == 422){
                        th.MessageErrors(xhr.responseText);
                }
                if(xhr.readyState == 4 && xhr.status == 405){
                    alert(xhr.responseText);
                }
                if(xhr.readyState == 4 && xhr.status == 500){
                    var objError = JSON.parse(xhr.responseText);
                    content.innerHTML = objError.message;
                }
                if(xhr.readyState == 4 && xhr.status == 200){
                    content.innerHTML = xhr.responseText;
                    var scripts = content.getElementsByTagName('script');
                    for(var i = 0; i < scripts.length; i++) eval(scripts[i].innerHTML);
                }
            };
            xhr.onerror = function(){
                console.log('Ошибка');
            };
            xhr.send(data);
        },
        MessageErrors: function(mes){
            var objError = JSON.parse(mes);
            var conError = document.querySelector('#FTModalError .modal-body');
            var context = '';
            if(objError.hasOwnProperty('errors')){
                for(var field in objError.errors){
                    if(objError.errors.hasOwnProperty(field)){
                        if(this.me.hasOwnProperty(field)){
                            context += '<div class="alert alert-danger">Поле <strong>' + this.me[field] + '</strong> - ' + objError.errors[field][0] + '</div>';
                        }
                        else
                        {
                            context += '<div class="alert alert-danger">Поле <strong>' + field + '</strong> - ' + objError.errors[field][0] + '</div>';
                        }
                    }
                }
            }
            conError.innerHTML = context;
            $('#FTModalError').modal('show');
        }
    };
}
