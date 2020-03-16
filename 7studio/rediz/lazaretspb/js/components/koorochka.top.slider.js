(function(window){
    'use strict';

    if (window.koorochkaTopSlider)
        return;

    window.koorochkaTopSlider = {

        id: "matadoor-slider",
        next: "matadoor-slider-next",
        prev: "matadoor-slider-prev",
       items: null,
        count: 0,
        ul: [],
        wait: null,
        preloader: 1000,
        firstItem: 0,
        interval: 8000,

        init: function (json) {
            if(!!json && json.length > 0)
            {
                this.count = json.length;
                this.items = json;
                this.wait = BX.showWait(this.id);
                setTimeout(function () {
                    window.koorochkaTopSlider.create();
                    window.koorochkaTopSlider.automatic();
                    window.koorochkaTopSlider.animateDescription();
                }, this.preloader);

            }
        },

        create: function(){
            var i, li;
            for (i  = 0; i < this.count; i++){
                li = BX.create('div', {
                    props: {
                        className:"item p-relative",
                        id: "top-slider-" + this.items[i].ID
                    },
                    children: [
                        BX.create("img", {
                            props: {
                                className:"img-fluid m-auto d-block",
                                src: this.items[i].PREVIEW_PICTURE.SRC
                            }
                        }),
                        BX.create("div", {
                            props: {
                                className:"p-absolute w-50 row align-items-center",
                            },
                            children: [

                                BX.create("div", {
                                    props: {
                                        className:"description"
                                    },
                                    children: [
                                        BX.create("a", {
                                            props: {
                                                className:"h1 bg-danger m-0 pl-3 pr-3 pb-2 d-block mb-3",
                                                href: this.items[i].DETAIL_PAGE_URL
                                            },
                                            text: this.items[i].NAME
                                        }),
                                        BX.create("a", {
                                            props: {
                                                className:"btn btn-outline-danger d-none d-lg-inline-block pl-4 pr-4",
                                                href: this.items[i].DETAIL_PAGE_URL
                                            },
                                            text: this.items[i].DETAIL_PAGE_TITLE
                                        })
                                    ]
                                }),

                            ]
                        })
                    ]
                });
                BX.append(li, BX(this.id));
            }
            this.controls();
            BX.closeWait(this.id, this.wait);
        },

        controls: function() {
            var controls = BX.create("div", {
                props: {
                    className:"carousel-controls"
                },
                children: [
                    BX.create("a", {
                        props: {
                            className:"btn btn-outline-danger",
                            id: this.prev
                        },
                        html: "&lsaquo;",
                        events: {
                            click: BX.delegate(this.slidePrev, this)
                        }
                    }),
                    BX.create("a", {
                        props: {
                            className:"btn btn-outline-danger",
                            id: this.next
                        },
                        html: "&rsaquo;",
                        events: {
                            click: BX.delegate(this.slideNext, this)
                        }
                    })
                ]
            });
            BX.append(controls, BX("matadoor-slider-top"));
        },

        slideNext: function(){


            // step
            this.firstItem++;
            if(this.firstItem > this.items.length)
                this.firstItem = 0;
            this.scrollLeft(this.items[this.firstItem]);

        },

        slidePrev: function(){
            // step
            this.firstItem--;
            if(this.firstItem < 0){
                this.firstItem = this.items.length;
                this.firstItem--;
            }
            this.scrollLeft(this.items[this.firstItem]);
        },

        scrollLeft: function(element) {
            if(element == undefined)
            {
                this.firstItem = 0;
                element = this.items[this.firstItem];
            }

            element = element.ID;
            element = document.getElementById('top-slider-' + element);
            element = element.offsetLeft;

            BX(this.id).scrollLeft = element;
            this.animateDescription();
            this.automatic();
        },

        automatic: function() {
            this.stopAutomatic();
            this.wait = setTimeout(function () {
                koorochkaTopSlider.slideNext();
                koorochkaTopSlider.automatic();
            }, this.interval);
        },

        stopAutomatic: function() {
            clearTimeout(this.wait);
        },

        // animate description
        animateDescription: function(){
            var items = BX.findChildren(BX(this.id), { className: "item" }, false),
                description;
            if(!!items &&items.length > 0)
            {
                description = BX.findChildren(items[this.firstItem], { className: "p-absolute" }, false);
                description = description[0];
                var easing = new BX.easing({
                    duration : 1500,
                    start : { height : 0, opacity : 0 },
                    finish : { height : 100, opacity: 100 },
                    transition : BX.easing.transitions.quint,
                    step : function(state){
                        description.style.height = state.height + "%";
                        description.style.width = state.height + "%";
                        description.style.opacity = state.opacity/100;
                    }
                });
                easing.animate();
            }
        },

        // dev tools
        d: function (value) {
            console.info(value);
        }
    };



})(window);