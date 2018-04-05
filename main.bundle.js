webpackJsonp(["main"],{

/***/ "./src/$$_lazy_route_resource lazy recursive":
/***/ (function(module, exports) {

function webpackEmptyAsyncContext(req) {
	// Here Promise.resolve().then() is used instead of new Promise() to prevent
	// uncatched exception popping up in devtools
	return Promise.resolve().then(function() {
		throw new Error("Cannot find module '" + req + "'.");
	});
}
webpackEmptyAsyncContext.keys = function() { return []; };
webpackEmptyAsyncContext.resolve = webpackEmptyAsyncContext;
module.exports = webpackEmptyAsyncContext;
webpackEmptyAsyncContext.id = "./src/$$_lazy_route_resource lazy recursive";

/***/ }),

/***/ "./src/app/_guard/auth.guard.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AuthGuard; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_router__ = __webpack_require__("./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__authentication_authentication_service__ = __webpack_require__("./src/app/authentication/authentication.service.ts");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
// _guard/auth.guard.ts



var AuthGuard = /** @class */ (function () {
    function AuthGuard(authentication, router) {
        this.authentication = authentication;
        this.router = router;
    }
    AuthGuard.prototype.canActivate = function () {
        if (this.authentication.loggedIn()) {
            return true;
        }
        else {
            this.router.navigate(['login']);
            return false;
        }
    };
    AuthGuard = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Injectable"])(),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_2__authentication_authentication_service__["a" /* AuthenticationService */], __WEBPACK_IMPORTED_MODULE_1__angular_router__["a" /* Router */]])
    ], AuthGuard);
    return AuthGuard;
}());



/***/ }),

/***/ "./src/app/_guard/index.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__auth_guard__ = __webpack_require__("./src/app/_guard/auth.guard.ts");
/* harmony namespace reexport (by used) */ __webpack_require__.d(__webpack_exports__, "a", function() { return __WEBPACK_IMPORTED_MODULE_0__auth_guard__["a"]; });
// _guard/index.ts



/***/ }),

/***/ "./src/app/agency/agency.component.css":
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./src/app/agency/agency.component.html":
/***/ (function(module, exports) {

module.exports = "<app-info-agency></app-info-agency>\n<app-cards-agency></app-cards-agency>\n"

/***/ }),

/***/ "./src/app/agency/agency.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AgencyComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var AgencyComponent = /** @class */ (function () {
    function AgencyComponent() {
    }
    AgencyComponent.prototype.ngOnInit = function () {
    };
    AgencyComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-agency',
            template: __webpack_require__("./src/app/agency/agency.component.html"),
            styles: [__webpack_require__("./src/app/agency/agency.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], AgencyComponent);
    return AgencyComponent;
}());



/***/ }),

/***/ "./src/app/app.component.html":
/***/ (function(module, exports) {

module.exports = "<li *ngIf=\"hasAuthToken()\"><a (click)=\"logout()\" href=\"#\">Logout</a></li>\n<app-navbar></app-navbar>\n<router-outlet></router-outlet>\n<app-footer></app-footer>\n"

/***/ }),

/***/ "./src/app/app.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AppComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_router__ = __webpack_require__("./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__authentication_authentication_service__ = __webpack_require__("./src/app/authentication/authentication.service.ts");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
// app.component.ts



var AppComponent = /** @class */ (function () {
    function AppComponent(authenticationService, router) {
        this.authenticationService = authenticationService;
        this.router = router;
    }
    /* return true if user is loggin */
    AppComponent.prototype.hasAuthToken = function () {
        return localStorage.getItem('id_token') !== null;
    };
    AppComponent.prototype.logout = function () {
        this.authenticationService.logout();
        this.router.navigate(['home']);
    };
    AppComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-root',
            template: __webpack_require__("./src/app/app.component.html")
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_2__authentication_authentication_service__["a" /* AuthenticationService */], __WEBPACK_IMPORTED_MODULE_1__angular_router__["a" /* Router */]])
    ], AppComponent);
    return AppComponent;
}());



/***/ }),

/***/ "./src/app/app.module.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* unused harmony export authHttpServiceFactory */
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AppModule; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_platform_browser__ = __webpack_require__("./node_modules/@angular/platform-browser/esm5/platform-browser.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__angular_forms__ = __webpack_require__("./node_modules/@angular/forms/esm5/forms.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__angular_http__ = __webpack_require__("./node_modules/@angular/http/esm5/http.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4_angular2_jwt__ = __webpack_require__("./node_modules/angular2-jwt/angular2-jwt.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4_angular2_jwt___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_4_angular2_jwt__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__app_component__ = __webpack_require__("./src/app/app.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__app_routing__ = __webpack_require__("./src/app/app.routing.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__guard_index__ = __webpack_require__("./src/app/_guard/index.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_8__authentication_authentication_service__ = __webpack_require__("./src/app/authentication/authentication.service.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_9__post_post_component__ = __webpack_require__("./src/app/post/post.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_10__navbar_navbar_component__ = __webpack_require__("./src/app/navbar/navbar.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_11__search_search_component__ = __webpack_require__("./src/app/search/search.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_12__carousel_carousel_component__ = __webpack_require__("./src/app/carousel/carousel.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_13__website_front_website_front_component__ = __webpack_require__("./src/app/website-front/website-front.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_14__footer_footer_component__ = __webpack_require__("./src/app/footer/footer.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_15__front_cards_front_cards_component__ = __webpack_require__("./src/app/front-cards/front-cards.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_16__login_login_component__ = __webpack_require__("./src/app/login/login.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_17__register_register_component__ = __webpack_require__("./src/app/register/register.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_18__like_like_component__ = __webpack_require__("./src/app/like/like.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_19__website_website_component__ = __webpack_require__("./src/app/website/website.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_20__home_home_component__ = __webpack_require__("./src/app/home/home.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_21__agency_agency_component__ = __webpack_require__("./src/app/agency/agency.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_22__cards_agency_cards_agency_component__ = __webpack_require__("./src/app/cards-agency/cards-agency.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_23__info_agency_info_agency_component__ = __webpack_require__("./src/app/info-agency/info-agency.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_24__profil_profil_component__ = __webpack_require__("./src/app/profil/profil.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_25__profil_info_profil_info_component__ = __webpack_require__("./src/app/profil-info/profil-info.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_26__profil_my_profil_profil_my_profil_component__ = __webpack_require__("./src/app/profil-my-profil/profil-my-profil.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_27_ng_recaptcha__ = __webpack_require__("./node_modules/ng-recaptcha/index.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_27_ng_recaptcha___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_27_ng_recaptcha__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_28__client_client_component__ = __webpack_require__("./src/app/client/client.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_29__client_cards_client_cards_component__ = __webpack_require__("./src/app/client-cards/client-cards.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_30__client_info_client_info_component__ = __webpack_require__("./src/app/client-info/client-info.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_31__profile_noted_projects_profile_noted_projects_component__ = __webpack_require__("./src/app/profile-noted-projects/profile-noted-projects.component.ts");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
// app.module.ts
































function authHttpServiceFactory(http, options) {
    return new __WEBPACK_IMPORTED_MODULE_4_angular2_jwt__["AuthHttp"](new __WEBPACK_IMPORTED_MODULE_4_angular2_jwt__["AuthConfig"]({}), http, options);
}
var AppModule = /** @class */ (function () {
    function AppModule() {
    }
    AppModule = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_1__angular_core__["NgModule"])({
            declarations: [
                __WEBPACK_IMPORTED_MODULE_5__app_component__["a" /* AppComponent */],
                __WEBPACK_IMPORTED_MODULE_10__navbar_navbar_component__["a" /* NavbarComponent */],
                __WEBPACK_IMPORTED_MODULE_11__search_search_component__["a" /* SearchComponent */],
                __WEBPACK_IMPORTED_MODULE_12__carousel_carousel_component__["a" /* CarouselComponent */],
                __WEBPACK_IMPORTED_MODULE_13__website_front_website_front_component__["a" /* WebsiteFrontComponent */],
                __WEBPACK_IMPORTED_MODULE_14__footer_footer_component__["a" /* FooterComponent */],
                __WEBPACK_IMPORTED_MODULE_15__front_cards_front_cards_component__["a" /* FrontCardsComponent */],
                __WEBPACK_IMPORTED_MODULE_13__website_front_website_front_component__["a" /* WebsiteFrontComponent */],
                __WEBPACK_IMPORTED_MODULE_16__login_login_component__["a" /* LoginComponent */],
                __WEBPACK_IMPORTED_MODULE_9__post_post_component__["a" /* PostComponent */],
                __WEBPACK_IMPORTED_MODULE_17__register_register_component__["a" /* RegisterComponent */],
                __WEBPACK_IMPORTED_MODULE_18__like_like_component__["a" /* LikeComponent */],
                __WEBPACK_IMPORTED_MODULE_19__website_website_component__["a" /* WebsiteComponent */],
                __WEBPACK_IMPORTED_MODULE_20__home_home_component__["a" /* HomeComponent */],
                __WEBPACK_IMPORTED_MODULE_21__agency_agency_component__["a" /* AgencyComponent */],
                __WEBPACK_IMPORTED_MODULE_22__cards_agency_cards_agency_component__["a" /* CardsAgencyComponent */],
                __WEBPACK_IMPORTED_MODULE_23__info_agency_info_agency_component__["a" /* InfoAgencyComponent */],
                __WEBPACK_IMPORTED_MODULE_24__profil_profil_component__["a" /* ProfilComponent */],
                __WEBPACK_IMPORTED_MODULE_25__profil_info_profil_info_component__["a" /* ProfilInfoComponent */],
                __WEBPACK_IMPORTED_MODULE_26__profil_my_profil_profil_my_profil_component__["a" /* ProfilMyProfilComponent */],
                __WEBPACK_IMPORTED_MODULE_27_ng_recaptcha__["RecaptchaComponent"],
                __WEBPACK_IMPORTED_MODULE_28__client_client_component__["a" /* ClientComponent */],
                __WEBPACK_IMPORTED_MODULE_29__client_cards_client_cards_component__["a" /* ClientCardsComponent */],
                __WEBPACK_IMPORTED_MODULE_30__client_info_client_info_component__["a" /* ClientInfoComponent */],
                __WEBPACK_IMPORTED_MODULE_31__profile_noted_projects_profile_noted_projects_component__["a" /* ProfileNotedProjectsComponent */]
            ],
            imports: [
                __WEBPACK_IMPORTED_MODULE_0__angular_platform_browser__["a" /* BrowserModule */],
                __WEBPACK_IMPORTED_MODULE_2__angular_forms__["b" /* ReactiveFormsModule */],
                __WEBPACK_IMPORTED_MODULE_3__angular_http__["HttpModule"],
                __WEBPACK_IMPORTED_MODULE_6__app_routing__["a" /* AppRouting */],
            ],
            providers: [
                {
                    provide: __WEBPACK_IMPORTED_MODULE_4_angular2_jwt__["AuthHttp"],
                    useFactory: authHttpServiceFactory,
                    deps: [__WEBPACK_IMPORTED_MODULE_3__angular_http__["Http"], __WEBPACK_IMPORTED_MODULE_3__angular_http__["RequestOptions"]]
                },
                __WEBPACK_IMPORTED_MODULE_7__guard_index__["a" /* AuthGuard */],
                __WEBPACK_IMPORTED_MODULE_8__authentication_authentication_service__["a" /* AuthenticationService */],
            ],
            bootstrap: [__WEBPACK_IMPORTED_MODULE_5__app_component__["a" /* AppComponent */]]
        })
    ], AppModule);
    return AppModule;
}());



/***/ }),

/***/ "./src/app/app.routing.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AppRouting; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_common__ = __webpack_require__("./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__angular_router__ = __webpack_require__("./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__post_post_component__ = __webpack_require__("./src/app/post/post.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__guard_index__ = __webpack_require__("./src/app/_guard/index.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__login_login_component__ = __webpack_require__("./src/app/login/login.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__home_home_component__ = __webpack_require__("./src/app/home/home.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__agency_agency_component__ = __webpack_require__("./src/app/agency/agency.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_8__profil_profil_component__ = __webpack_require__("./src/app/profil/profil.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_9__client_client_component__ = __webpack_require__("./src/app/client/client.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_10__profile_noted_projects_profile_noted_projects_component__ = __webpack_require__("./src/app/profile-noted-projects/profile-noted-projects.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_11__profil_my_profil_profil_my_profil_component__ = __webpack_require__("./src/app/profil-my-profil/profil-my-profil.component.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_12__website_website_component__ = __webpack_require__("./src/app/website/website.component.ts");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
// app.routing.ts













var routes = [
    {
        path: '',
        component: __WEBPACK_IMPORTED_MODULE_6__home_home_component__["a" /* HomeComponent */],
    },
    {
        path: 'agency',
        component: __WEBPACK_IMPORTED_MODULE_7__agency_agency_component__["a" /* AgencyComponent */]
    },
    {
        path: 'login',
        component: __WEBPACK_IMPORTED_MODULE_5__login_login_component__["a" /* LoginComponent */],
    },
    {
        path: 'profil',
        component: __WEBPACK_IMPORTED_MODULE_8__profil_profil_component__["a" /* ProfilComponent */],
        children: [
            {
                path: 'myProfil',
                component: __WEBPACK_IMPORTED_MODULE_11__profil_my_profil_profil_my_profil_component__["a" /* ProfilMyProfilComponent */]
            },
            {
                path: 'profilNotedProjects',
                component: __WEBPACK_IMPORTED_MODULE_10__profile_noted_projects_profile_noted_projects_component__["a" /* ProfileNotedProjectsComponent */],
            }
        ]
    },
    {
        path: 'client',
        component: __WEBPACK_IMPORTED_MODULE_9__client_client_component__["a" /* ClientComponent */],
    },
    {
        path: 'admin',
        component: __WEBPACK_IMPORTED_MODULE_3__post_post_component__["a" /* PostComponent */],
        canActivate: [__WEBPACK_IMPORTED_MODULE_4__guard_index__["a" /* AuthGuard */]]
    },
    {
        path: 'website',
        component: __WEBPACK_IMPORTED_MODULE_12__website_website_component__["a" /* WebsiteComponent */],
    },
    { path: '**', redirectTo: '' }
];
var AppRouting = /** @class */ (function () {
    function AppRouting() {
    }
    AppRouting = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["NgModule"])({
            imports: [
                __WEBPACK_IMPORTED_MODULE_1__angular_common__["CommonModule"],
                __WEBPACK_IMPORTED_MODULE_2__angular_router__["b" /* RouterModule */].forRoot(routes),
            ],
            exports: [__WEBPACK_IMPORTED_MODULE_2__angular_router__["b" /* RouterModule */]],
            declarations: [],
        })
    ], AppRouting);
    return AppRouting;
}());



/***/ }),

/***/ "./src/app/authentication/authentication.service.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return AuthenticationService; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_http__ = __webpack_require__("./node_modules/@angular/http/esm5/http.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_angular2_jwt__ = __webpack_require__("./node_modules/angular2-jwt/angular2-jwt.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_angular2_jwt___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_angular2_jwt__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_rxjs_add_operator_map__ = __webpack_require__("./node_modules/rxjs/_esm5/add/operator/map.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__angular_router__ = __webpack_require__("./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4_jwt_decode__ = __webpack_require__("./node_modules/jwt-decode/lib/index.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4_jwt_decode___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_4_jwt_decode__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
// authentication/authentication.service.ts
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};






var AuthenticationService = /** @class */ (function () {
    function AuthenticationService(http, router) {
        this.http = http;
        this.router = router;
    }
    AuthenticationService.prototype.authenticate = function (user) {
        var url = 'http://127.0.0.1:8000/api/login_check';
        var body = new __WEBPACK_IMPORTED_MODULE_0__angular_http__["URLSearchParams"]();
        body.append('username', user.username);
        body.append('password', user.password);
        var headers = new __WEBPACK_IMPORTED_MODULE_0__angular_http__["Headers"]({ 'Content-Type': 'application/x-www-form-urlencoded' });
        var options = new __WEBPACK_IMPORTED_MODULE_0__angular_http__["RequestOptions"]({ headers: headers });
        return this.http
            .post(url, body.toString(), options)
            .map(function (data) { return data.json(); });
    };
    /* this function delete the token and redirect the current user to the homepage */
    AuthenticationService.prototype.logout = function () {
        this.authorization = false;
        localStorage.removeItem('id_token');
    };
    AuthenticationService.prototype.loggedIn = function () {
        return Object(__WEBPACK_IMPORTED_MODULE_1_angular2_jwt__["tokenNotExpired"])();
    };
    /* this function return all roles of the current user was loggin */
    AuthenticationService.prototype.getRolesCurrentUser = function () {
        var token = localStorage.getItem('id_token');
        var tokenDecode = __WEBPACK_IMPORTED_MODULE_4_jwt_decode__(token);
        return tokenDecode.roles;
    };
    /* this function return true or false if the current user can access to the page
    * params :
    * role -> the role you want restrict
    */
    AuthenticationService.prototype.isAutorized = function (role) {
        var roles = this.getRolesCurrentUser();
        var authorization = false;
        roles.forEach(function (value) {
            console.log(value);
            console.log(role);
            if (role == value) {
                authorization = true;
            }
        });
        return authorization;
    };
    AuthenticationService = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_5__angular_core__["Injectable"])(),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_0__angular_http__["Http"], __WEBPACK_IMPORTED_MODULE_3__angular_router__["a" /* Router */]])
    ], AuthenticationService);
    return AuthenticationService;
}());



/***/ }),

/***/ "./src/app/cards-agency/cards-agency.component.css":
/***/ (function(module, exports) {

module.exports = "i{\n  font-size: 12px;\n  color: #989898;\n}\n"

/***/ }),

/***/ "./src/app/cards-agency/cards-agency.component.html":
/***/ (function(module, exports) {

module.exports = "<div class=\"grey spacing\" >\n  <div class=\"pt-5\">\n    <p class=\"text-center font-weight-bold\">12 sites Nominées  3 awards gagnés</p>\n  </div>\n  <div class=\"container\">\n    <div class=\"card-columns\">\n      <!-- il faut faire un *ngFor afin de récupérer les site sous formes de cards   -->\n      <div class=\"card\">\n        <img class=\"card-img-top\" [routerLink]=\"['/agency']\" src=\"http://via.placeholder.com/420x300\" alt=\"Card image cap\">\n        <div class=\"card-body\">\n          <p class=\"card-title\">Ruya</p>\n          <p class=\"card-text\">Par <a class=\"links\" [routerLink]=\"['/agency']\">Ruya</a> United states</p>\n          <div class=\"footerCard\">\n            <div class=\"date\">\n              <p class=\"text-muted\">29 novembre 2017</p>\n            </div>\n            <div class=\"linking\">\n              <i class=\"fas fa-eye\"></i>\n              <i class=\"fas fa-heart\"></i>\n            </div>\n          </div>\n        </div>\n      </div>\n      <div class=\"card\">\n        <img class=\"card-img-top\" src=\"http://via.placeholder.com/420x300\"  [routerLink]=\"['/client']\" alt=\"Card image cap\">\n        <div class=\"card-body\">\n          <p class=\"card-title\">Creative by toto</p>\n          <p class=\"card-text\">Par <a class=\"links\" [routerLink]=\"['/client']\">Digistudio</a> Japon</p>\n          <div class=\"footerCard\">\n            <div class=\"date\">\n              <p class=\"text-muted\">28 novembre 2017</p>\n            </div>\n            <div class=\"linking\">\n              <i class=\"fas fa-eye\"></i>\n              <i class=\"fas fa-heart\"></i>\n            </div>\n          </div>\n        </div>\n      </div>\n      <div class=\"card\">\n        <img class=\"card-img-top\" src=\"http://via.placeholder.com/420x300\" alt=\"Card image cap\">\n        <div class=\"card-body\">\n          <p class=\"card-title\">ANNA ESHWOOD</p>\n          <p class=\"card-text\">Par <a class=\"links\" href=\"\">Korellis</a> Angleterre </p>\n          <div class=\"footerCard\">\n            <div class=\"date\">\n              <p class=\"text-muted\">27 novembre 2017</p>\n            </div>\n            <div class=\"linking\">\n              <i class=\"fas fa-eye\"></i>\n              <i class=\"fas fa-heart\"></i>\n            </div>\n          </div>\n        </div>\n      </div>\n      <div class=\"card\">\n        <img class=\"card-img-top\" src=\"http://via.placeholder.com/420x300\" alt=\"Card image cap\">\n        <div class=\"card-body\">\n          <p class=\"card-title\">G-LLERY</p>\n          <p class=\"card-text\">Par <a class=\"links\" href=\"\">Samix</a> Espagne</p>\n          <div class=\"footerCard\">\n            <div class=\"date\">\n              <p class=\"text-muted\">26 novembre 2017</p>\n            </div>\n            <div class=\"linking\">\n              <i class=\"fas fa-eye\"></i>\n              <i class=\"fas fa-heart\"></i>\n            </div>\n          </div>\n        </div>\n      </div>\n    </div>\n  </div>\n</div>\n"

/***/ }),

/***/ "./src/app/cards-agency/cards-agency.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return CardsAgencyComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var CardsAgencyComponent = /** @class */ (function () {
    function CardsAgencyComponent() {
    }
    CardsAgencyComponent.prototype.ngOnInit = function () {
    };
    CardsAgencyComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-cards-agency',
            template: __webpack_require__("./src/app/cards-agency/cards-agency.component.html"),
            styles: [__webpack_require__("./src/app/cards-agency/cards-agency.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], CardsAgencyComponent);
    return CardsAgencyComponent;
}());



/***/ }),

/***/ "./src/app/carousel/carousel.component.css":
/***/ (function(module, exports) {

module.exports = ".custom_position{\n  position: relative;\n  top: -175px;\n}\n.headCarousel {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-orient: horizontal;\n  -webkit-box-direction: normal;\n      -ms-flex-direction: row;\n          flex-direction: row;\n  position: relative;\n  color: #fff;\n  top: 135px;\n  z-index: 1;\n  margin-left: 2%;\n}\n.headCarousel .dateinfo{\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n}\n.headCarousel .carouselbtn{\n  margin-right: 2%;\n}\n.headCarousel .carouselbtn button{\n  border-radius:50px;\n  border-color: #cccccc;\n  background-color: transparent;\n  color: #cccccc;\n}\n/*Info*/\n.bodyCarousel{\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  position: relative;\n  color: #fff;\n  top: 210px;\n  z-index: 1;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n}\n/*Links*/\n.linksCarousel{\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  position: relative;\n  color: #fff;\n  top: 435px;\n  z-index: 1;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n}\n.linksCarousel .linksBtn button{\n  border-radius:50px;\n  border-color: #cccccc;\n  background-color: transparent;\n  color: #cccccc;\n}\n.linksCarousel .linksBtn button:hover{\n  border-radius:50px;\n  border-color: #cccccc;\n  background-color: #FFFFFF;\n  color: #343434;\n}\nimg{\n  -webkit-filter:  brightness(0.15);\n          filter:  brightness(0.15);\n}\n/* responsive*/\n@media screen and (max-width: 660px) {\n  .custom_position{\n    top: -150px;\n  }\n  .bodyCarousel{\n    top: 140px;\n  }\n  .linksCarousel{\n    top: 200px;\n  }\n}\n@media screen and (max-width: 1199px) {\n  .linksCarousel {\n    top: 370px;\n  }\n}\n@media screen and (max-width: 991px) {\n  .linksCarousel{\n    top : 280px;\n    }\n}\n@media screen and (max-width: 767px) {\n  .linksCarousel{\n    top : 210px;\n  }\n}\n@media screen and (max-width: 500px) {\n  .linksCarousel{\n    top : 185px;\n  }\n}\n@media screen and (max-width: 440px) {\n  .custom_position{\n    top: -140px;\n  }\n  .bodyCarousel{\n    top: 140px;\n  }\n  .linksCarousel{\n    top: 150px;\n  }\n}\n\n"

/***/ }),

/***/ "./src/app/carousel/carousel.component.html":
/***/ (function(module, exports) {

module.exports = "<div class=\"grey\">\n  <div class=\"container custom_position\">\n    <div id=\"cover\">\n      <div id=\"carouselControls\" class=\"carousel slide\" data-ride=\"carousel\">\n        <div class=\"carousel-inner\">\n          <div class=\"carousel-item active\">\n            <div class=\"headCarousel\">\n              <div class=\"dateinfo\">\n                <i class=\"far fa-star\"></i><span>Site du jour</span>\n                <span>30 novembre 2017</span>\n              </div>\n              <div class=\"carouselbtn\">\n                <button><i class=\"fas fa-share-alt\"></i></button>\n              </div>\n            </div>\n            <div class=\"bodyCarousel\">\n              <div class=\"textCarousel\">\n                <h3>Gueudet.fr</h3>\n                <span>par Mentalworks</span><span>France</span>\n              </div>\n            </div>\n            <div class=\"linksCarousel\">\n              <div class=\"linksBtn\">\n                <button>Visiter le site</button>\n                <button>Voir la fiche</button>\n              </div>\n            </div>\n            <img class=\"d-block w-100\" src=\"http://via.placeholder.com/350x150\" alt=\"First slide\">\n          </div>\n        </div>\n        <a class=\"carousel-control-prev\" href=\"#carouselControls\" role=\"button\" data-slide=\"prev\">\n          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>\n          <span class=\"sr-only\">Previous</span>\n        </a>\n        <a class=\"carousel-control-next\" href=\"#carouselControls\" role=\"button\" data-slide=\"next\">\n          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>\n          <span class=\"sr-only\">Next</span>\n        </a>\n      </div>\n    </div>\n  </div>\n</div>"

/***/ }),

/***/ "./src/app/carousel/carousel.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return CarouselComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var CarouselComponent = /** @class */ (function () {
    function CarouselComponent() {
    }
    CarouselComponent.prototype.ngOnInit = function () {
    };
    CarouselComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-carousel',
            template: __webpack_require__("./src/app/carousel/carousel.component.html"),
            styles: [__webpack_require__("./src/app/carousel/carousel.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], CarouselComponent);
    return CarouselComponent;
}());



/***/ }),

/***/ "./src/app/client-cards/client-cards.component.css":
/***/ (function(module, exports) {

module.exports = "i{\n  font-size: 12px;\n  color: #989898;\n}\n.vertical_line_grey{\n  border-left:1px solid #666;\n  height: 19px;\n  margin: 31px 14px 0 7px;\n}\n.container .header-cards{\n  display:-webkit-box;\n  display:-ms-flexbox;\n  display:flex;\n  -webkit-box-orient: horizontal;\n  -webkit-box-direction: normal;\n      -ms-flex-direction: row;\n          flex-direction: row;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n}\n.container .header-cards span {\n  margin:25px 10px 25px 0;\n  text-transform: uppercase;\n  font-size:20px;\n}\n@media screen and (max-width:440px){\n  .container .header-cards span {\n    font-size:12px;\n  }\n  .vertical_line_grey{\n    height: 12px;\n    margin: 28px 10px 0 2px;\n  }\n}"

/***/ }),

/***/ "./src/app/client-cards/client-cards.component.html":
/***/ (function(module, exports) {

module.exports = "<div class=\"grey spacing\" >\n  <div class=\"container\">\n    <div class=\"header-cards\">\n      <span class=\"text-center font-weight-bold\">2 sites </span> <span> Nominés </span>\n      <div class=\"vertical_line_grey\"> </div>\n      <span class=\"text-center font-weight-bold\">1 Awards </span> <span> gagné </span>\n    </div>\n    <div class=\"card-columns\">\n      <!-- il faut faire un *ngFor afin de récupérer les site sous formes de cards   -->\n      <div class=\"card\">\n        <img class=\"card-img-top\" [routerLink]=\"['/agency']\" src=\"http://via.placeholder.com/420x300\" alt=\"Card image cap\">\n        <div class=\"card-body\">\n          <p class=\"card-title\">Ruya</p>\n          <p class=\"card-text\">Par <a class=\"links\" [routerLink]=\"['/agency']\">Ruya</a> United states</p>\n          <div class=\"footerCard\">\n            <div class=\"date\">\n              <p class=\"text-muted\">29 novembre 2017</p>\n            </div>\n            <div class=\"linking\">\n              <i class=\"fas fa-eye\"></i>\n              <i class=\"fas fa-heart\"></i>\n            </div>\n          </div>\n        </div>\n      </div>\n      <div class=\"card\">\n        <img class=\"card-img-top\" src=\"http://via.placeholder.com/420x300\"  [routerLink]=\"['/client']\" alt=\"Card image cap\">\n        <div class=\"card-body\">\n          <p class=\"card-title\">Creative by toto</p>\n          <p class=\"card-text\">Par <a class=\"links\" [routerLink]=\"['/client']\">Digistudio</a> Japon</p>\n          <div class=\"footerCard\">\n            <div class=\"date\">\n              <p class=\"text-muted\">28 novembre 2017</p>\n            </div>\n            <div class=\"linking\">\n              <i class=\"fas fa-eye\"></i>\n              <i class=\"fas fa-heart\"></i>\n            </div>\n          </div>\n        </div>\n      </div>\n      <div class=\"card\">\n        <img class=\"card-img-top\" src=\"http://via.placeholder.com/420x300\" [routerLink]=\"['profil']\" alt=\"Card image\n             cap\">\n        <div class=\"card-body\">\n          <p class=\"card-title\">ANNA ESHWOOD</p>\n          <p class=\"card-text\">Par <a class=\"links\" [routerLink]=\"['myProfil']\">Korellis</a> Angleterre </p>\n          <div class=\"footerCard\">\n            <div class=\"date\">\n              <p class=\"text-muted\">27 novembre 2017</p>\n            </div>\n            <div class=\"linking\">\n              <i class=\"fas fa-eye\"></i>\n              <i class=\"fas fa-heart\"></i>\n            </div>\n          </div>\n        </div>\n      </div>\n      <div class=\"card\">\n        <img class=\"card-img-top\" src=\"http://via.placeholder.com/420x300\" alt=\"Card image cap\">\n        <div class=\"card-body\">\n          <p class=\"card-title\">G-LLERY</p>\n          <p class=\"card-text\">Par <a class=\"links\" href=\"\">Samix</a> Espagne</p>\n          <div class=\"footerCard\">\n            <div class=\"date\">\n              <p class=\"text-muted\">26 novembre 2017</p>\n            </div>\n            <div class=\"linking\">\n              <i class=\"fas fa-star\"> 110 K</i>\n              <i class=\"fas fa-eye\"> 200 K</i>\n              <i class=\"fas fa-heart\"> 500 K</i>\n            </div>\n          </div>\n        </div>\n      </div>\n    </div>\n  </div>\n</div>\n"

/***/ }),

/***/ "./src/app/client-cards/client-cards.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ClientCardsComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var ClientCardsComponent = /** @class */ (function () {
    function ClientCardsComponent() {
    }
    ClientCardsComponent.prototype.ngOnInit = function () {
    };
    ClientCardsComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-client-cards',
            template: __webpack_require__("./src/app/client-cards/client-cards.component.html"),
            styles: [__webpack_require__("./src/app/client-cards/client-cards.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], ClientCardsComponent);
    return ClientCardsComponent;
}());



/***/ }),

/***/ "./src/app/client-info/client-info.component.css":
/***/ (function(module, exports) {

module.exports = "/* global css for page */\n.info-client-page {\n  background-color: #dddddd;\n  margin-top: -60px;\n}\n.central {\n  padding-top: 40px;\n  padding-bottom: 40px;\n}\nspan{\n  color:grey;\n}\n/* Style for the profil picture*/\n.resizePP{\n  width: 222px;\n  height: 222px;\n}\n/* style for the bottom of the pictures (icon + description)*/\n.vertical_line_grey{\n  border-left:1px solid #666;\n  height: 13px;\n  margin: 7px 12px 6px;\n}\n.font-bold{\n  font-weight: bold;\n}\ni{\n  font-size: 12px;\n  color: #989898;\n}\n.desc-agency{\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-orient: horizontal;\n  -webkit-box-direction: normal;\n      -ms-flex-direction: row;\n          flex-direction: row;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n  margin-bottom:15px;\n}\n.social-rate{\n  margin-bottom:15px;\n}\n/* Style for buttons*/\n.description-btn button{\n  border-radius: 50px;\n  margin-top: 20px;\n  margin-bottom: 20px;\n}\n.category-btn{\n  display: block;\n}\n.category-btn button{\n  margin-top:5px;\n  margin-right: 1%;\n  width:auto;\n  border-radius: 50px;\n  background-color: #89898b;\n  color: white;\n  border-color: #89898b;\n}\n.category-btn button:hover {\n  background-color: white;\n  color: dimgrey;\n}\n/* style for all informations in the white div*/\n.infoClient{\n  height: auto;\n  background-color: #FFFFFF;\n}\n.infoClient .info{\n  margin-right: 5%;\n}\n.infoClient .container{\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-orient: vertical;\n  -webkit-box-direction: normal;\n      -ms-flex-direction: column;\n          flex-direction: column;\n}\n.infoClient .container .row{\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n}\n.infoClient .header-info p{\n  font-weight:bold;\n  margin-top: 15px;\n  margin-bottom: 0;\n}\n.infoClient .footer-info p{\n  font-weight: bold;\n  margin-bottom: 15px;\n  color:grey;\n}\n/* Responsive */\n@media screen and (max-width:1198px){\n  .infoClient .info {\n    text-align: center;\n  }\n}\n@media screen and (max-width: 660px) {\n  .info-client-page {\n    margin-top: -35px;\n  }\n}\n@media screen and (max-width: 440px) {\n  .info-client-page {\n    margin-top: -25px;\n  }\n}\n@media screen and (max-width: 400px) {\n  button{\n    font-size: 14px;\n  }\n}\n@media screen and (max-width:350px){\n  span{\n    font-size:12px;\n  }\n  p{\n    font-size:14px;\n  }\n  .vertical_line_grey{\n    height: 12px;\n    margin: 4px 12px 6px;\n\n  }\n}\n\n"

/***/ }),

/***/ "./src/app/client-info/client-info.component.html":
/***/ (function(module, exports) {

module.exports = "<div class=\"info-client-page\">\n  <div class=\"container\">\n    <div class=\"text-center central\">\n      <img src=\"https://www.gueudet.fr/img/gueudet-automobile.png\" class=\"rounded-circle img-thumbnail resizePP\">\n      <h1 class=\"font-bold\">Gueudet</h1>\n      <div class=\"desc-agency\">\n        <span class=\"font-bold\">Grande Entreprise</span>\n        <div class=\"vertical_line_grey\"> </div>\n        <span> Automobile </span>\n        <div class=\"vertical_line_grey\"> </div>\n        <span> France</span>\n      </div>\n      <div class=\"social-rate\">\n        <i class=\"fas fa-eye\"> 999 K</i>\n        <i class=\"fas fa-heart\"> 999 K</i>\n        <i class=\"fas fa-star\"> 1 Awards</i>\n        <i class=\"fas fa-arrow-alt-circle-up\"> Note globale : 8.9</i>\n      </div>\n      <div class=\"description-btn\">\n        <button type=\"button\" class=\"btn btn-outline-secondary\">SITE WEB</button>\n        <button type=\"button\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-share\"></i></button>\n        <p><strong>Le groupe Guedet est le 2ème distributeurs automobile en France avec un CA de 1.1M d'Euros, 9 Marques et 158 concessions situées principalement dans le nord de la france</strong></p>\n      </div>\n      <div class=\"category-btn\">\n        <button type=\"button\" class=\"btn btn-outline-secondary\">UX DESIGN</button>\n        <button type=\"button\" class=\"btn btn-outline-secondary\">WEB DESIGN</button>\n        <button type=\"button\" class=\"btn btn-outline-secondary\">E-MARKETING</button>\n        <button type=\"button\" class=\"btn btn-outline-secondary\">UI DESIGN</button>\n        <button type=\"button\" class=\"btn btn-outline-secondary\">CRM</button>\n        <button type=\"button\" class=\"btn btn-outline-secondary\">Intranet</button>\n      </div>\n    </div>\n  </div>\n</div>\n\n<div class=\"infoClient\">\n  <div class=\"container\">\n    <div class=\"row\">\n      <div class=\"info\">\n        <div class=\"header-info\">\n        <p>Pays</p>\n        </div>\n        <div class=\"footer-info\">\n        <p>France</p>\n        </div>\n      </div>\n      <div class=\"info\">\n        <div class=\"header-info\">\n          <p>Catégorie</p>\n        </div>\n        <div class=\"footer-info\">\n        <p>Grande Entreprise</p>\n        </div>\n      </div>\n      <div class=\"info\">\n        <div class=\"header-info\">\n        <p>Secteur d'activité</p>\n        </div>\n        <div class=\"footer-info\">\n        <p>Automobile</p>\n        </div>\n      </div>\n      <div class=\"info\">\n        <div class=\"header-info\">\n        <p>Date de création</p>\n        </div>\n        <div class=\"footer-info\">\n        <p>2000</p>\n        </div>\n      </div>\n      <div class=\"info\">\n        <div class=\"header-info\">\n        <p>Chiffre d'affaires</p>\n        </div>\n        <div class=\"footer-info\">\n        <p> + de 500M</p>\n        </div>\n      </div>\n      <div class=\"info\">\n        <div class=\"header-info\">\n        <p>Effectifs</p>\n        </div>\n        <div class=\"footer-info\">\n        <p>1200</p>\n        </div>\n      </div>\n      <div class=\"info\">\n        <div class=\"header-info\">\n        <p>Auteurs</p>\n        </div>\n        <div class=\"footer-info\">\n        <p>3</p>\n        </div>\n      </div>\n    </div>\n  </div>\n</div>\n"

/***/ }),

/***/ "./src/app/client-info/client-info.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ClientInfoComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var ClientInfoComponent = /** @class */ (function () {
    function ClientInfoComponent() {
    }
    ClientInfoComponent.prototype.ngOnInit = function () {
    };
    ClientInfoComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-client-info',
            template: __webpack_require__("./src/app/client-info/client-info.component.html"),
            styles: [__webpack_require__("./src/app/client-info/client-info.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], ClientInfoComponent);
    return ClientInfoComponent;
}());



/***/ }),

/***/ "./src/app/client/client.component.css":
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./src/app/client/client.component.html":
/***/ (function(module, exports) {

module.exports = "<app-client-info></app-client-info>\n<app-client-cards></app-client-cards>\n"

/***/ }),

/***/ "./src/app/client/client.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ClientComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var ClientComponent = /** @class */ (function () {
    function ClientComponent() {
    }
    ClientComponent.prototype.ngOnInit = function () {
    };
    ClientComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-client',
            template: __webpack_require__("./src/app/client/client.component.html"),
            styles: [__webpack_require__("./src/app/client/client.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], ClientComponent);
    return ClientComponent;
}());



/***/ }),

/***/ "./src/app/footer/footer.component.css":
/***/ (function(module, exports) {

module.exports = "p{\n  font-size: 12px;\n}\n.footer{\n  background-color: #39393A;\n}\n.about{\n  width: 20em;\n}\n.mapsite{\n  padding-left: 3%;\n}\n.social{\n  font-size:1em;\n  color: grey;\n}\n.grey_text{\n  color: #989898;\n}\n.nomargin{\n  margin: 0px;\n}\n.links{\n  text-decoration: underline;\n  -webkit-text-decoration-color: #989898;\n          text-decoration-color: #989898;\n}\n"

/***/ }),

/***/ "./src/app/footer/footer.component.html":
/***/ (function(module, exports) {

module.exports = "<footer class=\"footer\">\n  <div class=\"container\">\n    <div class=\"row\">\n      <div class=\"col\">\n        <div class=\"about\">\n          <b><p class=\"uppercase grey_text\">A PROPOS de 3W AWARDS</p></b>\n          <p class=\"grey_text\">\n            Nous sommes une plateforme communautaire libre et indépendante composée d'experts du digital et de L'UX/UI qui évalue et favorise les meilleurs sites web dans différentes catégories, soumis par les propriétaires eux-mêmes ou les professionels qui les ont créés\n          </p>\n          <p class=\"text-muted\">© 3W AWARDS tout droits réservés</p>\n        </div>\n      </div>\n      <div class=\"col\">\n        <div class=\"mapsite\">\n            <a class=\"links\" href=\"\"><p class=\"grey_text nomargin\">Home</p></a>\n            <a class=\"links\" href=\"\"><p class=\"grey_text nomargin\">Nominés</p></a>\n            <a class=\"links\" href=\"\"><p class=\"grey_text nomargin\">Awards</p></a>\n            <a class=\"links\" href=\"\"><p class=\"grey_text nomargin\">Annuaire</p></a>\n            <a class=\"links\" href=\"\"><p class=\"grey_text nomargin\">Blog</p></a>\n            <a class=\"links\" href=\"\"><p class=\"grey_text nomargin\">Offre d'emploi</p></a>\n            <a class=\"links\" href=\"\"><p class=\"grey_text nomargin\">Boutique</p></a>\n            <a class=\"links\" href=\"\"><p class=\"grey_text nomargin\">A Propos</p></a>\n            <a class=\"links\" href=\"\"><p class=\"grey_text nomargin\">Contact</p></a>\n        </div>\n      </div>\n      <div class=\"col\">\n        <div class=\"latestsubmitted\">\n          <b><p class=\"uppercase grey_text\">Derniers sites soumis</p></b>\n        </div>\n      </div>\n      <div class=\"col\">\n      </div>\n      <div class=\"col\">\n        <div class=\"social\">\n          <i class=\"fab fa-instagram\"></i>\n          <i class=\"fab fa-facebook-f\"></i>\n          <i class=\"fab fa-twitter\"></i>\n          <i class=\"fab fa-linkedin-in\"></i>\n          <i class=\"fab fa-google-plus-g\"></i>\n        </div>\n      </div>\n    </div>\n  </div>\n</footer>\n"

/***/ }),

/***/ "./src/app/footer/footer.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return FooterComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var FooterComponent = /** @class */ (function () {
    function FooterComponent() {
    }
    FooterComponent.prototype.ngOnInit = function () {
    };
    FooterComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-footer',
            template: __webpack_require__("./src/app/footer/footer.component.html"),
            styles: [__webpack_require__("./src/app/footer/footer.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], FooterComponent);
    return FooterComponent;
}());



/***/ }),

/***/ "./src/app/front-cards/front-cards.component.css":
/***/ (function(module, exports) {

module.exports = "i{\n  font-size: 12px;\n  color: #989898;\n}"

/***/ }),

/***/ "./src/app/front-cards/front-cards.component.html":
/***/ (function(module, exports) {

module.exports = "<div class=\"grey spacing\" >\n    <p class=\"text-center font-weight-bold\">Derniers sites soumis aux votes</p>\n  <div class=\"container\">\n    <div class=\"card-columns\">\n      <!-- il faut faire un *ngFor afin de récupérer les site sous formes de cards   -->\n      <div class=\"card\">\n        <img class=\"card-img-top\" [routerLink]=\"['/agency']\" src=\"http://via.placeholder.com/420x300\" alt=\"Card image cap\">\n        <div class=\"card-body\">\n          <p class=\"card-title\">Ruya</p>\n          <p class=\"card-text\">Par <a class=\"links\" [routerLink]=\"['/agency']\">Ruya</a> United states</p>\n          <div class=\"footerCard\">\n            <div class=\"date\">\n              <p class=\"text-muted\">29 novembre 2017</p>\n            </div>\n            <div class=\"linking\">\n              <i class=\"fas fa-eye\"></i>\n              <i class=\"fas fa-heart\"></i>\n            </div>\n          </div>\n        </div>\n      </div>\n      <div class=\"card\">\n        <img class=\"card-img-top\" src=\"http://via.placeholder.com/420x300\"  [routerLink]=\"['/client']\" alt=\"Card image cap\">\n        <div class=\"card-body\">\n          <p class=\"card-title\">Creative by toto</p>\n          <p class=\"card-text\">Par <a class=\"links\" [routerLink]=\"['/client']\">Digistudio</a> Japon</p>\n          <div class=\"footerCard\">\n            <div class=\"date\">\n              <p class=\"text-muted\">28 novembre 2017</p>\n            </div>\n            <div class=\"linking\">\n              <i class=\"fas fa-eye\"></i>\n              <i class=\"fas fa-heart\"></i>\n            </div>\n          </div>\n        </div>\n      </div>\n      <div class=\"card\">\n        <img class=\"card-img-top\" src=\"http://via.placeholder.com/420x300\" [routerLink]=\"['profil']\" alt=\"Card image\n             cap\">\n        <div class=\"card-body\">\n          <p class=\"card-title\">ANNA ESHWOOD</p>\n          <p class=\"card-text\">Par <a class=\"links\" [routerLink]=\"['myProfil']\">Korellis</a> Angleterre </p>\n          <div class=\"footerCard\">\n            <div class=\"date\">\n              <p class=\"text-muted\">27 novembre 2017</p>\n            </div>\n            <div class=\"linking\">\n              <i class=\"fas fa-eye\"></i>\n              <i class=\"fas fa-heart\"></i>\n            </div>\n          </div>\n        </div>\n      </div>\n      <div class=\"card\">\n        <img class=\"card-img-top\" src=\"http://via.placeholder.com/420x300\" alt=\"Card image cap\">\n        <div class=\"card-body\">\n          <p class=\"card-title\">G-LLERY</p>\n          <p class=\"card-text\">Par <a class=\"links\" href=\"\">Samix</a> Espagne</p>\n          <div class=\"footerCard\">\n            <div class=\"date\">\n              <p class=\"text-muted\">26 novembre 2017</p>\n            </div>\n            <div class=\"linking\">\n              <i class=\"fas fa-star\"> 110 K</i>\n              <i class=\"fas fa-eye\"> 200 K</i>\n              <i class=\"fas fa-heart\"> 500 K</i>\n            </div>\n          </div>\n        </div>\n      </div>\n    </div>\n  </div>\n</div>\n"

/***/ }),

/***/ "./src/app/front-cards/front-cards.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return FrontCardsComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var FrontCardsComponent = /** @class */ (function () {
    function FrontCardsComponent() {
    }
    FrontCardsComponent.prototype.ngOnInit = function () {
    };
    FrontCardsComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-front-cards',
            template: __webpack_require__("./src/app/front-cards/front-cards.component.html"),
            styles: [__webpack_require__("./src/app/front-cards/front-cards.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], FrontCardsComponent);
    return FrontCardsComponent;
}());



/***/ }),

/***/ "./src/app/home/home.component.css":
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./src/app/home/home.component.html":
/***/ (function(module, exports) {

module.exports = "<app-carousel></app-carousel>\n<app-front-cards></app-front-cards>\n"

/***/ }),

/***/ "./src/app/home/home.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return HomeComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var HomeComponent = /** @class */ (function () {
    function HomeComponent() {
    }
    HomeComponent.prototype.ngOnInit = function () {
    };
    HomeComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-home',
            template: __webpack_require__("./src/app/home/home.component.html"),
            styles: [__webpack_require__("./src/app/home/home.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], HomeComponent);
    return HomeComponent;
}());



/***/ }),

/***/ "./src/app/info-agency/info-agency.component.css":
/***/ (function(module, exports) {

module.exports = ".infoAgency{\n  height: 80px;\n  background-color: #FFFFFF;\n}\n\n.call-to-action {\n  border-radius: 50px;\n}\n\n.tags {\n  border-radius: 50px;\n  background-color: #89898b;\n  color: white;\n  border-color: #89898b;\n}\n\n.tags:hover {\n  background-color: white;\n  color: dimgrey;\n}\n\n.grey {\n  color: grey;\n}\n\n.greyBackground {\n  background-color: #dddddd;\n}\n\n.central {\n  padding-top: 40px;\n  padding-bottom: 40px;\n}\n\n.resizePP{\n  width: 20%;\n}\n"

/***/ }),

/***/ "./src/app/info-agency/info-agency.component.html":
/***/ (function(module, exports) {

module.exports = "<div class=\"greyBackground\">\n  <div class=\"container\">\n    <div class=\"text-center central\">\n      <img src=\"http://www.businesspme.net/public/_upload/images/photos_personnes/11_img-9909-1-carre-zoom.jpg\"\n           class=\"rounded-circle img-thumbnail resizePP\" alt=\"...\">\n      <h1>MentalWork</h1>\n      <span>Agence Digitale</span><span class=\"grey\"> | Indépendante | France</span><br><br>\n      <button type=\"button\" class=\"btn btn-outline-secondary call-to-action\">SITE WEB</button>\n      <button type=\"button\" class=\"btn btn-outline-secondary call-to-action\"><i class=\"fa fa-share\"></i></button>\n      <br><br>\n      <p><strong>Mentalwork est une agence digitale technologique de taille humaine spécialisée dans la création de sites web et d'applications métiers/mobile à forte valeur ajoutée</strong></p>\n      <button type=\"button\" class=\"btn btn-outline-secondary tags\">UX DESIGN</button>\n      <button type=\"button\" class=\"btn btn-outline-secondary tags\">WEB DESIGN</button>\n      <button type=\"button\" class=\"btn btn-outline-secondary tags\">E-MARKETING</button>\n      <button type=\"button\" class=\"btn btn-outline-secondary tags\">UI DESIGN</button>\n    </div>\n  </div>\n</div>\n<div class=\"infoAgency\">\n  <div class=\"container\">\n    <div class=\"row align-items-center justify-content-center\">\n      <div class=\"info ml-4 mr-4\">\n        <p>Pays</p>\n        <p class=\"grey_text\">France</p>\n      </div>\n      <div class=\"info ml-4 mr-4\">\n        <p>Catégorie</p>\n        <p class=\"grey_text\">Agence digitale</p>\n      </div>\n      <div class=\"info ml-4 mr-4\">\n        <p>Statut</p>\n        <p class=\"grey_text \">Independante</p>\n      </div>\n      <div class=\"info ml-4 mr-4\">\n        <p>Date de création</p>\n        <p class=\"grey_text\">2000</p>\n      </div>\n      <div class=\"info ml-4 mr-4\">\n        <p>Chiffre d'affaires</p>\n        <p class=\"grey_text\">1 à 2M</p>\n      </div>\n      <div class=\"info ml-4 mr-4\">\n        <p>Effectifs</p>\n        <p class=\"grey_text\">20</p>\n      </div>\n      <div class=\"info ml-4 mr-4\">\n        <p>Auteurs</p>\n        <p class=\"grey_text\">5</p>\n      </div>\n    </div>\n  </div>\n</div>\n"

/***/ }),

/***/ "./src/app/info-agency/info-agency.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return InfoAgencyComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var InfoAgencyComponent = /** @class */ (function () {
    function InfoAgencyComponent() {
    }
    InfoAgencyComponent.prototype.ngOnInit = function () {
    };
    InfoAgencyComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-info-agency',
            template: __webpack_require__("./src/app/info-agency/info-agency.component.html"),
            styles: [__webpack_require__("./src/app/info-agency/info-agency.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], InfoAgencyComponent);
    return InfoAgencyComponent;
}());



/***/ }),

/***/ "./src/app/like/like.component.css":
/***/ (function(module, exports) {

module.exports = ".itsTrue {\n    color: deeppink;\n}\n\ni {\n    cursor: pointer;\n}\n"

/***/ }),

/***/ "./src/app/like/like.component.html":
/***/ (function(module, exports) {

module.exports = "<i class=\"{{$cssClasses}}\" (click)=\"isClicked()\"></i>\n\n\n\n"

/***/ }),

/***/ "./src/app/like/like.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return LikeComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var LikeComponent = /** @class */ (function () {
    function LikeComponent() {
        this.isLiked = false;
        this.likeCounter = 0;
        this.cssClasses = 'fas fa-heart';
    }
    LikeComponent.prototype.isClicked = function () {
        if (this.isLiked == false) {
            this.isLiked = true;
            this.likeCounter++;
            this.cssClasses = 'fas fa-heart itsTrue';
        }
        else {
            this.isLiked = false;
            this.likeCounter--;
            this.cssClasses = 'fas fa-heart';
        }
        console.log(this.isLiked);
    };
    LikeComponent.prototype.ngOnInit = function () {
    };
    LikeComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-like',
            template: __webpack_require__("./src/app/like/like.component.html"),
            styles: [__webpack_require__("./src/app/like/like.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], LikeComponent);
    return LikeComponent;
}());



/***/ }),

/***/ "./src/app/login/login.component.css":
/***/ (function(module, exports) {

module.exports = ".icon-margin{\n    margin-right:10px;\n    color:#666;\n}\n.span-connexion{\n    text-transform: uppercase;\n    color:#666;\n    font-size:14px;\n    cursor:pointer;\n}\n@media screen and (max-width:800px) {\n    .span-connexion {\n        display: none;\n    }\n}\n@media screen and (max-width: 390px) {\n    .icon-margin {\n        font-size: 12px;\n        margin-bottom: 7px;\n        margin-right: 1px;\n    }\n}"

/***/ }),

/***/ "./src/app/login/login.component.html":
/***/ (function(module, exports) {

module.exports = "<!-- authentication/authentication.component.html -->\n\n<a style=\"cursor: pointer\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"far fa-user icon-margin\"></i></a>\n<span class=\"span-connexion\" data-toggle=\"modal\" data-target=\"#myModal\">Connection </span>\n<!--<button type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">Open Modal</button>-->\n<!-- Modal HTML -->\n\n<div id=\"myModal\" class=\"modal fade space-modal\">\n    <div class=\"modal-dialog\">\n        <div class=\"modal-content\">\n            <div class=\"modal-body\">\n                <button type=\"button\" class=\"close pull-right\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>\n                <h4 class=\"title-modal text-center\">Login</h4>\n                <div>\n                    <div [hidden]=\"!error\" class=\"alert alert-danger\" role=\"alert\">\n                        <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>\n                        <span class=\"sr-only\">Error:</span>\n                    </div>\n                    <form [formGroup]=\"loginForm\" (ngSubmit)=\"onSubmit()\">\n                        <div class=\"form-group content-form-group row\">\n                            <label class=\"text-right row-group col-sm-4\">Nom ou pseudo: </label>\n                            <input type=\"text\" class=\"input-register-login center form-control col-sm-8 col-xs-12\"  formControlName=\"username\">\n                        </div>\n                        <div class=\"form-group content-form-group row\">\n                            <label class=\"text-right row-group col-sm-4\">Mot de passe</label>\n                            <input type=\"password\" class=\"input-register-login center form-control col-sm-8 col-xs-12\"  formControlName=\"password\">\n                        </div>\n                        <div class=\"center-btn\">\n                            <button type=\"submit\" class=\"btn-red btn pull-right\" [disabled]=\"!loginForm.valid\">\n                                Connexion\n                            </button>\n                        </div>\n                    </form>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n"

/***/ }),

/***/ "./src/app/login/login.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return LoginComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_forms__ = __webpack_require__("./node_modules/@angular/forms/esm5/forms.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__authentication_authentication_service__ = __webpack_require__("./src/app/authentication/authentication.service.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__angular_router__ = __webpack_require__("./node_modules/@angular/router/esm5/router.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};




var LoginComponent = /** @class */ (function () {
    function LoginComponent(formBuilder, authenticationService, router) {
        this.formBuilder = formBuilder;
        this.authenticationService = authenticationService;
        this.router = router;
        this.error = '';
        this.loginForm = formBuilder.group({
            'username': ['', __WEBPACK_IMPORTED_MODULE_1__angular_forms__["c" /* Validators */].required],
            'password': ['', __WEBPACK_IMPORTED_MODULE_1__angular_forms__["c" /* Validators */].required]
        });
    }
    LoginComponent.prototype.ngOnInit = function () {
    };
    LoginComponent.prototype.onSubmit = function () {
        var _this = this;
        this.authenticationService.authenticate(this.loginForm.value)
            .subscribe(function (data) {
            localStorage.setItem('id_token', data.token);
            _this.router.navigate(['home']);
        }, function (error) { return _this.error = error.message; });
    };
    LoginComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-login',
            template: __webpack_require__("./src/app/login/login.component.html"),
            styles: [__webpack_require__("./src/app/login/login.component.css")]
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1__angular_forms__["a" /* FormBuilder */],
            __WEBPACK_IMPORTED_MODULE_2__authentication_authentication_service__["a" /* AuthenticationService */],
            __WEBPACK_IMPORTED_MODULE_3__angular_router__["a" /* Router */]])
    ], LoginComponent);
    return LoginComponent;
}());



/***/ }),

/***/ "./src/app/navbar/navbar.component.css":
/***/ (function(module, exports) {

module.exports = ".navbar{\n  display:-webkit-box;\n  display:-ms-flexbox;\n  display:flex;\n  -webkit-box-align: start;\n      -ms-flex-align: start;\n          align-items: flex-start;\n  height: 160px;\n}\n.btn-menu {\n  background-color: transparent;\n  cursor:pointer;\n  border:none;\n  width: 90px;\n  height: 35px;\n}\n.show .btn-menu{\n  background-color:#39393A;\n  color:#ddd;\n}\n.dropdown-menu{\n  border:none;\n  min-width:90px;\n  background-color:#39393A;\n  margin:0;\n  border-radius:unset;\n  top:35px;\n}\n.dropdown-menu a{\n  color:#ddd;\n  margin-left: 5px;\n}\n.left-nav{\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-orient: horizontal;\n  -webkit-box-direction: normal;\n      -ms-flex-direction: row;\n          flex-direction: row;\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n}\n.left-nav p{\n  margin-top:14px;\n  text-transform: uppercase;\n}\n.vertical_line_red{\n  border-left:1px solid red;\n  height:30px;\n  margin: 3px;\n}\n.right-nav{\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-orient: horizontal;\n  -webkit-box-direction: normal;\n      -ms-flex-direction: row;\n          flex-direction: row;\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  height: 67px;\n}\n.right-nav i{\n  margin-right: 40px;\n  color: #666;\n  font-size: 19px;\n}\n.right-nav span{\n  text-transform: uppercase;\n  color:#666;\n  font-size:14px;\n}\n.right-nav .btn-outline-danger{\n  border: 2px solid red;\n  border-radius: 20px;\n  margin-left: 25px;\n  text-transform: uppercase;\n  font-size:14px;\n}\n.right-nav select{\n  -webkit-appearance: none;\n  -moz-appearance: none;\n  appearance: none;\n  margin-left:15px;\n  border:none;/* remove default arrow */\n  background-color: transparent;\n}\n.vertical_line_grey{\n  border-left:1px solid #666;\n  height:14px;\n  margin: 10px;\n}\n@media screen and (max-width: 1260px) {\n  .vertical_line_red {\n    display: none;\n  }\n  .left-nav p{\n    display:none;\n  }\n  .right-nav i{\n    margin-right:10px;\n  }\n}\n@media screen and (max-width:800px){\n  .right-nav span{\n    display:none;\n  }\n  .right-nav .vertical_line_grey{\n    display:none;\n  }\n}\n@media screen and (max-width:850px) {\n  .right-nav .btn-outline-danger {\n    margin-left: 0;\n  }\n}\n@media screen and (max-width: 660px) {\n  .navbar{\n    height:110px;\n  }\n  .right-nav .btn-outline-danger{\n    display:none;\n  }\n  .right-nav select{\n    margin-left:0;\n  }\n  .left-nav img{\n    width:160px;\n  }\n  .right-nav{\n    height:53px;\n  }\n}\n@media screen and (max-width: 440px) {\n  .navbar{\n    height:75px;\n  }\n  .right-nav select{\n    font-size:12px;\n  }\n  .left-nav img{\n    width:104px;\n  }\n  .right-nav{\n    height:34px;\n  }\n  .right-nav i{\n    font-size:12px;\n    margin-right:3px;\n  }\n  .btn-menu {\n    width:76px;\n  }\n}\n"

/***/ }),

/***/ "./src/app/navbar/navbar.component.html":
/***/ (function(module, exports) {

module.exports = "<nav class=\"navbar navbar-light\">\n  <div class=\"left-nav\">\n    <div class=\"dropdown\">\n      <button class=\"btn-menu\" type=\"button\" data-toggle=\"dropdown\">\n        <i class=\"fas fa-bars\"></i>\n        Menu\n      </button>\n      <ul class=\"dropdown-menu\">\n        <li><a [routerLink]=\"['/']\">HOME</a></li>\n        <li><a href=\"#\">NOMINÉS</a></li>\n        <li><a href=\"#\">AWARDS</a></li>\n        <li><a [routerLink]=\"['/agency']\">AGENCES</a></li>\n        <li><a href=\"#\">JURY</a></li>\n        <li><a href=\"#\">BLOG</a></li>\n        <li><a href=\"#\">JOBS</a></li>\n        <li><a href=\"#\">SHOP</a></li>\n      </ul>\n    </div>\n      <img [src]=\"imgLogo\" routerLink=\"/\" alt=\"3w_awards\">\n    <div class=\"vertical_line_red\"> </div>\n    <p> Les meilleurs site du web dans chaque catégorie </p>\n  </div>\n  <div class=\"right-nav\">\n    <i class=\"fas fa-search\"></i>\n    <a *ngIf=\"autorized()\" href=\"http://3wawards/app_dev.php/admin/?action=list&entity=Agency\" target=\"_self\">Administration</a>\n    <app-login></app-login>\n    <div class=\"vertical_line_grey\"> </div>\n    <!--<span> Inscription </span>-->\n    <app-register></app-register>\n    <button class=\"btn btn-outline-danger\" type=\"submit\">Soumettre un site</button>\n    <select name=\"lang\" id=\"\">\n      <option value=\"France\" selected>FR</option>\n      <option value=\"English\">EN</option>\n    </select>\n  </div>\n</nav>\n\n\n\n<!--<nav class=\"col-md-12 navbar navbar-light bg-light\" id=\"navigation\">\n    <div class=\"col-md-6\">\n      <div class=\"navbar-brand navigation custom_left_element_navbar\" href=\"#\">\n        <div class=\"burger_menu_custom\">\n          <button  (click)=\"showBtn()\" class=\"navbar-toggler  noborder\" type=\"button\"><i class=\"fas fa-bars\"></i>\n          </button><p> Menu</p>\n          <div id=\"menu-nav\" >\n            <ul class=\"navbar-nav mr-auto\">\n              <li class=\"nav-item active\">\n                <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>\n              </li>\n              <li class=\"nav-item\">\n                <a class=\"nav-link\" href=\"#\">NOMINÉS</a>\n              </li>\n              <li class=\"nav-item\">\n                <a class=\"nav-link\" href=\"#\">AWARDS</a>\n              </li>\n              <li class=\"nav-item\">\n                <a class=\"nav-link\" href=\"#\">AGENCES</a>\n              </li>\n              <li class=\"nav-item\">\n                <a class=\"nav-link\" href=\"#\">JURY</a>\n              </li>\n              <li class=\"nav-item\">\n                <a class=\"nav-link\" href=\"#\">BLOG</a>\n              </li>\n              <li class=\"nav-item\">\n                <a class=\"nav-link\" href=\"#\">JOBS</a>\n              </li>\n              <li class=\"nav-item\">\n                <a class=\"nav-link\" href=\"#\">SHOP</a>\n              </li>\n            </ul>\n          </div>\n        </div>\n        <div class=\"logo_slogan\">\n          <img [src]=\"imgLogo\" alt=\"3w_awards\">\n          <div class=\"vertical_line_red\"> </div>\n          <p> Les meilleurs site du web dans chaque catégorie </p>\n        </div>\n      </div>\n    </div>\n    <div class=\"col-md-4\">\n      <div class=\"navbar-brand navigation custom_right_element_navbar\">\n        <i class=\"fas fa-search\"></i>\n        <app-login></app-login>\n        <a *ngIf=\"autorized()\" href=\"http://3wawards/app_dev.php/admin/?action=list&entity=Agency\" target=\"_self\">Administration</a>\n        <div class=\"vertical_line_grey\"></div>\n        <app-register></app-register>\n        <button class=\"btn btn-outline-danger my-2 my-sm-0 round\" type=\"submit\">Soumettre un site</button>\n        <select class=\"noborder\" name=\"lang\" id=\"\">\n          <option value=\"France\" selected>FR</option>\n          <option value=\"English\">EN</option>\n        </select>\n      </div>\n    </div>\n</nav> -->\n"

/***/ }),

/***/ "./src/app/navbar/navbar.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return NavbarComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__authentication_authentication_service__ = __webpack_require__("./src/app/authentication/authentication.service.ts");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var NavbarComponent = /** @class */ (function () {
    function NavbarComponent(auth) {
        this.auth = auth;
        this.imgLogo = 'assets/img/logo.png';
    }
    NavbarComponent.prototype.ngOnInit = function () {
    };
    NavbarComponent.prototype.autorized = function () {
        if (localStorage.getItem('id_token')) {
            return this.auth.isAutorized('ROLE_ADMIN');
        }
    };
    NavbarComponent.prototype.showBtn = function () {
        document.getElementById('menu-nav').style.display = 'block';
    };
    NavbarComponent.prototype.openSite = function () {
        /* */
    };
    NavbarComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-navbar',
            template: __webpack_require__("./src/app/navbar/navbar.component.html"),
            styles: [__webpack_require__("./src/app/navbar/navbar.component.css")]
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1__authentication_authentication_service__["a" /* AuthenticationService */]])
    ], NavbarComponent);
    return NavbarComponent;
}());



/***/ }),

/***/ "./src/app/post/post.component.css":
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./src/app/post/post.component.html":
/***/ (function(module, exports) {

module.exports = "<p>\n  post works!\n</p>\n"

/***/ }),

/***/ "./src/app/post/post.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return PostComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var PostComponent = /** @class */ (function () {
    function PostComponent() {
    }
    PostComponent.prototype.ngOnInit = function () {
    };
    PostComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-post',
            template: __webpack_require__("./src/app/post/post.component.html"),
            styles: [__webpack_require__("./src/app/post/post.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], PostComponent);
    return PostComponent;
}());



/***/ }),

/***/ "./src/app/profil-info/profil-info.component.css":
/***/ (function(module, exports) {

module.exports = ".call-to-action {\n    border-radius: 50px;\n}\n\n.tags {\n    border-radius: 50px;\n    background-color: #89898b;\n    color: white;\n    border-color: transparent;\n}\n\n.tags:hover {\n    background-color: white;\n    border-color: transparent;\n    color: dimgrey;\n}\n\n.grey {\n    color: grey;\n}\n\n.greyBackground {\n    background-color: #dddddd;\n    border-bottom: 3px solid white;\n}\n\n.central {\n    padding-top: 40px;\n    padding-bottom: 40px;\n}\n\n.tabCenter {\n    position: relative;\n    left: 6%;\n}\n\n.resizePP {\n    width: 20%;\n}\n\n.nav-tabs .nav-link.active {\n    text-decoration: none;\n    border-bottom: 3px solid red;\n    background-color: transparent;\n    border-top: transparent;\n    border-right: transparent;\n    border-left: transparent;\n}\n\nul {\n    font-family: 'Monserrat', sans-serif;\n    font-weight: 600;\n    color:  grey;\n    text-transform: uppercase;\n}\n\nh1 {\n    font-family: 'Monserrat', 'Open Sans', sans-serif;\n    font-weight: 700;\n}\n\n"

/***/ }),

/***/ "./src/app/profil-info/profil-info.component.html":
/***/ (function(module, exports) {

module.exports = "<!--**********************-->\n<!--HEADER OF PROFIL-->\n<!--**********************-->\n<div class=\"greyBackground\">\n    <div class=\"container\">\n        <div class=\"text-center central\">\n            <img src=\"http://www.businesspme.net/public/_upload/images/photos_personnes/11_img-9909-1-carre-zoom.jpg\"\n                 class=\"rounded-circle img-thumbnail resizePP\" alt=\"...\">\n            <h1>Olivier SALESSE</h1>\n            <span>Membre</span><span class=\"grey\"> | UX/UI designer | France</span><br><br>\n            <button type=\"button\" class=\"btn btn-outline-secondary call-to-action\">SITE WEB</button>\n            <button type=\"button\" class=\"btn btn-outline-secondary call-to-action\"><i class=\"fa fa-share\"></i></button>\n            <br><br>\n            <p><strong>Co-fondateur et directeur de création de l'agence digitale Mentalworks, DA UX/UI.</strong></p>\n            <button type=\"button\" class=\"btn btn-outline-secondary tags\">UX DESIGN</button>\n            <button type=\"button\" class=\"btn btn-outline-secondary tags\">WEB DESIGN</button>\n            <button type=\"button\" class=\"btn btn-outline-secondary tags\">E-MARKETING</button>\n            <button type=\"button\" class=\"btn btn-outline-secondary tags\">UI DESIGN</button>\n        </div>\n        <ul class=\"nav nav-tabs tabCenter\">\n            <li class=\"nav-item\">\n                <a class=\"nav-link disabled\" routerLinkActive=\"active\" [routerLink]=\"['myProfil']\">Mon Profil</a>\n            </li>\n            <li class=\"nav-item\">\n                <a class=\"nav-link disabled\" routerLinkActive=\"active\">Mes favoris</a>\n            </li>\n            <li class=\"nav-item\">\n                <a class=\"nav-link disabled\"   routerLinkActive=\"active\" [routerLink]=\"['profilNotedProjects']\">Projets notés</a>\n            </li>\n            <li class=\"nav-item\">\n                <a class=\"nav-link\" >Projets soumis</a>\n            </li>\n            <li class=\"nav-item\">\n                <a class=\"nav-link disabled\" href=\"#\">Clients</a>\n            </li>\n            <li class=\"nav-item\">\n                <a class=\"nav-link disabled\" href=\"#\">Agences</a>\n            </li>\n            <li class=\"nav-item\">\n                <a class=\"nav-link disabled\" href=\"#\">Awards obtenus</a>\n            </li>\n\n        </ul>\n    </div>\n</div>\n"

/***/ }),

/***/ "./src/app/profil-info/profil-info.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ProfilInfoComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var ProfilInfoComponent = /** @class */ (function () {
    function ProfilInfoComponent() {
        this.isActive = true;
    }
    ProfilInfoComponent.prototype.ngOnInit = function () {
    };
    ProfilInfoComponent.prototype.addActiveClass = function (id) {
        this.id = id;
    };
    ProfilInfoComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-profil-info',
            template: __webpack_require__("./src/app/profil-info/profil-info.component.html"),
            styles: [__webpack_require__("./src/app/profil-info/profil-info.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], ProfilInfoComponent);
    return ProfilInfoComponent;
}());



/***/ }),

/***/ "./src/app/profil-my-profil/profil-my-profil.component.css":
/***/ (function(module, exports) {

module.exports = ".greyBackground {\n    background-color: #dddddd;\n}\n\n\n.noRoundedCorners {\n    border-radius: 0;\n}\n\n\n.formDiv {\n    margin-left: 120px;\n    padding-top: 40px;\n    padding-bottom: 40px;\n}\n\n\n.optInSubmit {\n    margin-left: 185px;\n}\n\n\np, label, button {\n    font-family: 'Monserrat', 'Open Sans', sans-serif;\n    font-weight: 400;\n    color:  grey;\n}\n\n\n.cancel {\n    width: 150px;\n    height: 75%;\n    border-radius: 50px;\n    background-color: white;\n    border-color: white;\n    color: #eb1c24;\n    font-weight: 700;\n}\n\n\n.submit {\n    width: 150px;\n    border-radius: 50px;\n    background-color: #eb1c24;\n    color: white;\n    font-weight: 700;\n}\n\n\n.resizePP {\n    width: 45%;\n}\n\n\n.imageProfil {\n    float: right;\n}\n\n\n.upload {\n    width: 110px;\n    height: 75%;\n    border-radius: 50px;\n}\n\n\n.fa-info-circle{\n    color: grey;\n}\n\n\n.vertical_line_red{\n    border-left:2px solid red;\n    padding-left: -2px;\n}\n"

/***/ }),

/***/ "./src/app/profil-my-profil/profil-my-profil.component.html":
/***/ (function(module, exports) {

module.exports = "<div class=\"greyBackground myProfil\">\n    <div class=\"container\">\n        <div class=\"col-md-12 formDiv\">\n            <!--**********-->\n            <!--CIVILITY-->\n            <!--**********-->\n            <h2>Identité</h2>\n            <div class=\"form-group row\">\n                <label class=\"col-sm-2 col-form-label\">Civilité :</label>\n                <div class=\"col-sm-10\">\n                    <div class=\"form-check form-check-inline\">\n                        <input class=\"form-check-input checkmark\" checked=\"\" type=\"radio\" id=\"inlineCheckbox1\"\n                               value=\"option1\">\n                        <label class=\"form-check-label\" for=\"inlineCheckbox1\">Monsieur</label>\n                    </div>\n                    <div class=\"form-check form-check-inline\">\n                        <input class=\"form-check-input checkmark\" type=\"radio\" id=\"inlineCheckbox2\" value=\"option2\">\n                        <label class=\"form-check-label\" for=\"inlineCheckbox2\">Madame</label>\n                    </div>\n                </div>\n            </div>\n            <!--**********-->\n            <!--PROFILE IMAGE-->\n            <!--**********-->\n            <div class=\"imageProfil\">\n                <p>Photo/avatar :</p>\n                <img src=\"http://www.businesspme.net/public/_upload/images/photos_personnes/11_img-9909-1-carre-zoom.jpg\"\n                     class=\"resizePP\" alt=\"...\"><br><br>\n                <button type=\"button\" class=\"btn btn-light roundedCorners upload\">Upload</button>\n                <i class=\"fa fa-info-circle\"></i>\n            </div>\n            <div class=\"form-group row\">\n                <label for=\"inputPassword\" class=\"col-sm-3 col-form-label\">Nom ou pseudo :</label>\n                <div class=\"vertical_line_red\"></div>\n                <div class=\"col-sm-7\">\n                    <input type=\"text\" class=\"form-control noRoundedCorners\" id=\"lastName\" placeholder=\"SALESSE\">\n                </div>\n            </div>\n            <div class=\"form-group row\">\n                <label for=\"inputPassword\" class=\"col-sm-3 col-form-label\">Prénom :</label>\n                <div class=\"col-sm-7\">\n                    <input type=\"text\" class=\"form-control noRoundedCorners\" id=\"firstName\" placeholder=\"Olivier\">\n                </div>\n            </div>\n            <h2>Connexion</h2>\n            <div class=\"form-group row\">\n                <label for=\"inputPassword\" class=\"col-sm-3 col-form-label\">E-mail :</label>\n                <div class=\"col-sm-7\">\n                    <input type=\"text\" class=\"form-control noRoundedCorners\" id=\"email\"\n                           placeholder=\"olivier@salesse.fr\">\n                </div>\n            </div>\n            <div class=\"form-group row\">\n                <label for=\"inputPassword\" class=\"col-sm-3 col-form-label\">Mot de passe :</label>\n                <div class=\"col-sm-7\">\n                    <input type=\"password\" class=\"form-control noRoundedCorners\" id=\"inputPassword\"\n                           placeholder=\"******\">\n                </div>\n            </div>\n            <!--**********-->\n            <!--PROFIL-->\n            <!--**********-->\n            <h2>Profil</h2>\n            <div class=\"form-group row\">\n                <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Date de naissance :</label>\n                <div class=\"col-sm-5\">\n                    <input type=\"date\" class=\"form-control noRoundedCorners\" id=\"13/08/1993\" placeholder=\"\">\n                </div>\n            </div>\n            <div class=\"form-group row\">\n                <label for=\"exampleFormControlSelect1\" class=\"col-sm-2 col-form-label\">Pays :</label>\n                <div class=\"col-sm-5\">\n                    <select class=\"form-control noRoundedCorners\" id=\"exampleFormControlSelect1\">\n                        <option>France</option>\n                        <option>2</option>\n                        <option>3</option>\n                        <option>4</option>\n                        <option>5</option>\n                    </select>\n                </div>\n            </div>\n            <div class=\"form-group row\">\n                <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Métier/profession :</label>\n                <div class=\"col-sm-5\">\n                    <select class=\"form-control noRoundedCorners\" id=\"\">\n                        <option>Directeur de création</option>\n                        <option>2</option>\n                        <option>3</option>\n                        <option>4</option>\n                        <option>5</option>\n                    </select>\n                </div>\n            </div>\n            <div class=\"form-group row\">\n                <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Présentation/bio :</label>\n                <div class=\"col-sm-5\">\n                    <input type=\"password\" class=\"form-control noRoundedCorners\" id=\"\"\n                           placeholder=\"Co fondateur de mentalworks\">\n                </div>\n            </div>\n            <div class=\"form-group row\">\n                <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Compétences clés :</label>\n                <div class=\"col-sm-5\">\n                    <input type=\"password\" class=\"form-control noRoundedCorners\" id=\"\" placeholder=\"\">\n                </div>\n            </div>\n            <div class=\"form-group row\">\n                <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Centres d'intérêts :</label>\n                <div class=\"col-sm-5\">\n                    <input type=\"password\" class=\"form-control noRoundedCorners\" id=\"\" placeholder=\"\">\n                </div>\n            </div>\n            <!--**********-->\n            <!--SOCIAL-->\n            <!--**********-->\n            <h2>Liens web</h2>\n            <div class=\"form-group row\">\n                <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Site web personnel :</label>\n                <div class=\"col-sm-5\">\n                    <input type=\"password\" class=\"form-control noRoundedCorners\" id=\"\"\n                           placeholder=\"https://www.salesse.com\">\n                </div>\n            </div>\n            <div class=\"form-group row\">\n                <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Facebook :</label>\n                <div class=\"col-sm-5\">\n                    <input type=\"password\" class=\"form-control noRoundedCorners\" id=\"\"\n                           placeholder=\"https://www.salesse.com\">\n                </div>\n            </div>\n            <div class=\"form-group row\">\n                <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Twitter :</label>\n                <div class=\"col-sm-5\">\n                    <input type=\"password\" class=\"form-control noRoundedCorners\" id=\"\"\n                           placeholder=\"https://www.salesse.com\">\n                </div>\n            </div>\n            <div class=\"form-group row\">\n                <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">LinkedIn :</label>\n                <div class=\"col-sm-5\">\n                    <input type=\"password\" class=\"form-control noRoundedCorners\" id=\"\"\n                           placeholder=\"https://www.salesse.com\">\n                </div>\n            </div>\n            <div class=\"form-group row\">\n                <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Instagram :</label>\n                <div class=\"col-sm-5\">\n                    <input type=\"password\" class=\"form-control noRoundedCorners\" id=\"\"\n                           placeholder=\"https://www.salesse.com\">\n                </div>\n            </div>\n            <div class=\"form-group row\">\n                <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Behance :</label>\n                <div class=\"col-sm-5\">\n                    <input type=\"password\" class=\"form-control noRoundedCorners\" id=\"\"\n                           placeholder=\"https://www.salesse.com\">\n                </div>\n            </div>\n            <div class=\"form-group row\">\n                <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Dribbble :</label>\n                <div class=\"col-sm-5\">\n                    <input type=\"password\" class=\"form-control noRoundedCorners\" id=\"\"\n                           placeholder=\"https://www.salesse.com\">\n                </div>\n            </div>\n            <!--***********-->\n            <!--CHECKBOXES OPT IN-->\n            <!--***********-->\n            <div class=\"optInSubmit\">\n                <div class=\"form-check col-sm-7\">\n                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"defaultCheck1\">\n                    <label class=\"form-check-label\" for=\"defaultCheck1\">\n                        Etre informé par e-mail des nouveaux sites publiés.\n                    </label>\n                </div>\n                <div class=\"form-check col-sm-6\">\n                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"defaultCheck1\">\n                    <label class=\"form-check-label\" for=\"defaultCheck1\">\n                        J'accepte de recevoir la newsletter et des informations de la part de 3wawards.\n                    </label>\n                </div>\n                <br>\n                <button type=\"button\" class=\"btn btn-cancel\">Annuler</button>\n                <button type=\"button\" class=\"btn btn-submit\">Sauvegarder</button>\n            </div>\n        </div>\n    </div>\n</div>\n"

/***/ }),

/***/ "./src/app/profil-my-profil/profil-my-profil.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ProfilMyProfilComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var ProfilMyProfilComponent = /** @class */ (function () {
    function ProfilMyProfilComponent() {
    }
    ProfilMyProfilComponent.prototype.ngOnInit = function () {
    };
    ProfilMyProfilComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-profil-my-profil',
            template: __webpack_require__("./src/app/profil-my-profil/profil-my-profil.component.html"),
            styles: [__webpack_require__("./src/app/profil-my-profil/profil-my-profil.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], ProfilMyProfilComponent);
    return ProfilMyProfilComponent;
}());



/***/ }),

/***/ "./src/app/profil/profil.component.css":
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./src/app/profil/profil.component.html":
/***/ (function(module, exports) {

module.exports = "<app-profil-info></app-profil-info>\n<router-outlet></router-outlet>\n"

/***/ }),

/***/ "./src/app/profil/profil.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ProfilComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var ProfilComponent = /** @class */ (function () {
    function ProfilComponent() {
    }
    ProfilComponent.prototype.ngOnInit = function () {
    };
    ProfilComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-profil',
            template: __webpack_require__("./src/app/profil/profil.component.html"),
            styles: [__webpack_require__("./src/app/profil/profil.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], ProfilComponent);
    return ProfilComponent;
}());



/***/ }),

/***/ "./src/app/profile-noted-projects/profile-noted-projects.component.css":
/***/ (function(module, exports) {

module.exports = ".greyBackground {\n    background-color: #dddddd;\n    border-bottom: 3px solid white;\n}\n\n.central {\n    padding-top: 40px;\n    padding-bottom: 40px;\n}\n"

/***/ }),

/***/ "./src/app/profile-noted-projects/profile-noted-projects.component.html":
/***/ (function(module, exports) {

module.exports = "<div class=\"greyBackground\">\n  <div class=\"container\">\n    <div class=\"text-center central\">\n      <h4><strong>12 PROJETS</strong> NOTES</h4>\n    <div class=\"card-columns\">\n      <!-- il faut faire un *ngFor afin de récupérer les site sous formes de cards   -->\n      <div class=\"card\">\n        <img class=\"card-img-top\" [routerLink]=\"['/agency']\" src=\"http://via.placeholder.com/420x300\" alt=\"Card image cap\">\n        <div class=\"card-body\">\n          <p class=\"card-title\">Ruya</p>\n          <p class=\"card-text\">Par <a class=\"links\" [routerLink]=\"['/agency']\">Ruya</a> United states</p>\n          <div class=\"footerCard\">\n            <div class=\"date\">\n              <p class=\"text-muted\">29 novembre 2017</p>\n            </div>\n            <div class=\"linking\">\n              <i class=\"fas fa-eye\"></i>\n              <i class=\"fas fa-heart\"></i>\n            </div>\n          </div>\n        </div>\n      </div>\n      <div class=\"card\">\n        <img class=\"card-img-top\" src=\"http://via.placeholder.com/420x300\"  [routerLink]=\"['/client']\" alt=\"Card image cap\">\n        <div class=\"card-body\">\n          <p class=\"card-title\">Creative by toto</p>\n          <p class=\"card-text\">Par <a class=\"links\" [routerLink]=\"['/client']\">Digistudio</a> Japon</p>\n          <div class=\"footerCard\">\n            <div class=\"date\">\n              <p class=\"text-muted\">28 novembre 2017</p>\n            </div>\n            <div class=\"linking\">\n              <i class=\"fas fa-eye\"></i>\n              <i class=\"fas fa-heart\"></i>\n            </div>\n          </div>\n        </div>\n      </div>\n      <div class=\"card\">\n        <img class=\"card-img-top\" src=\"http://via.placeholder.com/420x300\" [routerLink]=\"['profil']\" alt=\"Card image\n             cap\">\n        <div class=\"card-body\">\n          <p class=\"card-title\">ANNA ESHWOOD</p>\n          <p class=\"card-text\">Par <a class=\"links\" [routerLink]=\"['myProfil']\">Korellis</a> Angleterre </p>\n          <div class=\"footerCard\">\n            <div class=\"date\">\n              <p class=\"text-muted\">27 novembre 2017</p>\n            </div>\n            <div class=\"linking\">\n              <i class=\"fas fa-eye\"></i>\n              <i class=\"fas fa-heart\"></i>\n            </div>\n          </div>\n        </div>\n      </div>\n      <div class=\"card\">\n        <img class=\"card-img-top\" src=\"http://via.placeholder.com/420x300\" alt=\"Card image cap\">\n        <div class=\"card-body\">\n          <p class=\"card-title\">G-LLERY</p>\n          <p class=\"card-text\">Par <a class=\"links\" href=\"\">Samix</a> Espagne</p>\n          <div class=\"footerCard\">\n            <div class=\"date\">\n              <p class=\"text-muted\">26 novembre 2017</p>\n            </div>\n            <div class=\"linking\">\n              <i class=\"fas fa-star\"> 110 K</i>\n              <i class=\"fas fa-eye\"> 200 K</i>\n              <i class=\"fas fa-heart\"> 500 K</i>\n            </div>\n          </div>\n        </div>\n      </div>\n    </div>\n  </div>\n</div>\n</div>\n"

/***/ }),

/***/ "./src/app/profile-noted-projects/profile-noted-projects.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return ProfileNotedProjectsComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var ProfileNotedProjectsComponent = /** @class */ (function () {
    function ProfileNotedProjectsComponent() {
    }
    ProfileNotedProjectsComponent.prototype.ngOnInit = function () {
    };
    ProfileNotedProjectsComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-profile-noted-projects',
            template: __webpack_require__("./src/app/profile-noted-projects/profile-noted-projects.component.html"),
            styles: [__webpack_require__("./src/app/profile-noted-projects/profile-noted-projects.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], ProfileNotedProjectsComponent);
    return ProfileNotedProjectsComponent;
}());



/***/ }),

/***/ "./src/app/register/register.component.css":
/***/ (function(module, exports) {

module.exports = ".title-modal\n{\n    font-family: 'Monserrat', 'Open Sans', sans-serif;\n    font-weight: 900;\n}\n.span-inscription{\n    text-transform: uppercase;\n    color:#666;\n    font-size:14px;\n    cursor:pointer;\n}\n@media screen and (max-width:800px) {\n    .span-inscription {\n        display: none;\n    }\n}"

/***/ }),

/***/ "./src/app/register/register.component.html":
/***/ (function(module, exports) {

module.exports = "<span class=\"span-inscription\" data-toggle=\"modal\" data-target=\"#myModal2\">Inscription</span>\n\n\n<div id=\"myModal2\" class=\"modal fade space-modal\">\n    <div class=\"modal-dialog\">\n        <div class=\"modal-content\">\n            <div class=\"modal-body\">\n                <button type=\"button\" class=\"close pull-right\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>\n                <h4 class=\"title-modal text-center\">Inscription</h4>\n                <div class=\"space-top\">\n                    <!--&lt;!&ndash;<div [hidden]=\"!error\" class=\"alert alert-danger\" role=\"alert\">&ndash;&gt;-->\n                    <!--&lt;!&ndash;<span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>&ndash;&gt;-->\n                    <!--&lt;!&ndash;<span class=\"sr-only\">Error:</span>&ndash;&gt;-->\n                    <!--</div>-->\n                    <form [formGroup]=\"registerForm\">\n                        <div class=\"form-group content-form-group row\">\n                            <label class=\"text-right row-group col-sm-4\">Prénom : </label>\n                            <input type=\"text\" class=\"input-register-login center form-control col-sm-8 col-xs-12\"\n                                   placeholder=\"\" formControlName=\"prenom\">\n                        </div>\n                        <div class=\"form-group content-form-group row\">\n                            <label class=\"text-right row-group col-sm-4\">Nom ou pseudo: </label>\n                            <input type=\"text\" class=\"input-register-login center form-control col-sm-8 col-xs-12\"\n                                   placeholder=\"\" formControlName=\"nomPseudo\">\n                        </div>\n                        <div class=\"form-group content-form-group row\">\n                            <label class=\"text-right row-group col-sm-4\">E-mail:</label>\n                            <input type=\"text\" class=\"input-register-login center form-control col-sm-8 col-xs-12\" placeholder=\"\" formControlName=\"email\">\n                        </div>\n                        <div class=\"form-group content-form-group row\">\n                            <label class=\"text-right row-group col-sm-4\">Mot de passe:</label>\n                            <input type=\"password\" class=\"input-register-login center form-control col-sm-8 col-xs-12\" placeholder=\"\" formControlName=\"mdp\">\n                        </div>\n                        <div class=\"center-btn\">\n                            <button type=\"submit\" class=\"btn-red btn pull-right\" [disabled]=\"!registerForm.valid\">\n                                Créer mon compte\n                            </button>\n                        </div>\n                    </form>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>"

/***/ }),

/***/ "./src/app/register/register.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return RegisterComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_forms__ = __webpack_require__("./node_modules/@angular/forms/esm5/forms.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var RegisterComponent = /** @class */ (function () {
    function RegisterComponent(formBuilder) {
        this.formBuilder = formBuilder;
        this.registerForm = formBuilder.group({
            'prenom': ['', __WEBPACK_IMPORTED_MODULE_1__angular_forms__["c" /* Validators */].required],
            'nomPseudo': ['', __WEBPACK_IMPORTED_MODULE_1__angular_forms__["c" /* Validators */].required],
            'email': ['', __WEBPACK_IMPORTED_MODULE_1__angular_forms__["c" /* Validators */].required],
            'mdp': ['', __WEBPACK_IMPORTED_MODULE_1__angular_forms__["c" /* Validators */].required],
        });
    }
    RegisterComponent.prototype.ngOnInit = function () {
    };
    RegisterComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-register',
            template: __webpack_require__("./src/app/register/register.component.html"),
            styles: [__webpack_require__("./src/app/register/register.component.css")]
        }),
        __metadata("design:paramtypes", [__WEBPACK_IMPORTED_MODULE_1__angular_forms__["a" /* FormBuilder */]])
    ], RegisterComponent);
    return RegisterComponent;
}());



/***/ }),

/***/ "./src/app/search/search.component.css":
/***/ (function(module, exports) {

module.exports = ".round{\n  border-radius: 17px;\n}\n"

/***/ }),

/***/ "./src/app/search/search.component.html":
/***/ (function(module, exports) {

module.exports = "<input id=\"searchbar\" class=\"form-control round\" type=\"search\" placeholder=\"Nom du site\">\n"

/***/ }),

/***/ "./src/app/search/search.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return SearchComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var SearchComponent = /** @class */ (function () {
    function SearchComponent() {
    }
    SearchComponent.prototype.ngOnInit = function () {
    };
    SearchComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-search',
            template: __webpack_require__("./src/app/search/search.component.html"),
            styles: [__webpack_require__("./src/app/search/search.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], SearchComponent);
    return SearchComponent;
}());



/***/ }),

/***/ "./src/app/website-front/website-front.component.css":
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./src/app/website-front/website-front.component.html":
/***/ (function(module, exports) {

module.exports = "<p>\n  website-front works!\n</p>\n"

/***/ }),

/***/ "./src/app/website-front/website-front.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return WebsiteFrontComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var WebsiteFrontComponent = /** @class */ (function () {
    function WebsiteFrontComponent() {
    }
    WebsiteFrontComponent.prototype.ngOnInit = function () {
    };
    WebsiteFrontComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-website-front',
            template: __webpack_require__("./src/app/website-front/website-front.component.html"),
            styles: [__webpack_require__("./src/app/website-front/website-front.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], WebsiteFrontComponent);
    return WebsiteFrontComponent;
}());



/***/ }),

/***/ "./src/app/website/website.component.css":
/***/ (function(module, exports) {

module.exports = "/* general css */\n\n.btn\n{\n    max-width: 100% !important;\n}\n\nh2\n{\n    font-weight: 700;\n    color: #999999;\n    font-size: 14px;\n    text-align: center;\n\n}\n\n/* css for intro + panel info */\n\n.panel-info {\n    background-color: white;\n    padding: 20px;\n}\n\n.tags {\n    border-radius: 50px;\n    font-size: 12px !important;\n    max-width: 300px;\n}\n\n.grey {\n    color: dimgrey;\n}\n\n.album {\n    background-color: #DDDDDD !important;\n}\n\n.special-container {\n    max-width: 832px;\n    margin: 0 auto;\n}\n\n.tags:hover {\n    color: dimgrey;\n    font-weight: 500;\n    font-size: 12px !important;\n    background-color: white;\n    border: 1px solid white;\n}\n\n.position-album {\n    margin-top: -100px;\n}\n\n.grey-website {\n    margin-top: -20px;\n    color: #999999;\n    margin-bottom: 20px;\n}\n\n.country-drag {\n    max-width: 16px;\n    margin-bottom: 4px;\n    margin-right: 7px;\n}\n\n.checked {\n    color: grey;\n}\n\n/* end css for intro and panel info */\n\n/* panel focus */\n\n.panel-focus {\n    background-color: #e6e6e6;\n    padding: 15px;\n}\n\n.text-grey {\n    color: dimgrey;\n}\n\n.space-panel {\n    margin-top: 10px;\n}\n\n.main-color {\n    border-radius: 100%;\n    width: 20px;\n    height: 21px;\n    float: left;\n    margin-right: 3px;\n    display: block;\n}\n\n.line\n{\n    margin-top: -10px;\n}\n\n.style-column\n{\n    line-height: 1;\n    margin-top: -14px;\n}\n\n.space-left\n{\n    margin-left: 36px;\n}\n\n@media (max-width: 768px) {\n    .space-left {\n        margin-left: inherit;\n    }\n}\n\n.star-ratings-css {\n\n    unicode-bidi: bidi-override;\n    color: #c5c5c5;\n    font-size: 12px;\n    height: 25px;\n    width: 100px;\n    margin-top: -15px;\n    position: relative;\n    padding: 0;\n}\n\n/* end panel focus*/\n\n/* panel collapsable */\n\n.clickable{\n    cursor: pointer;\n}\n\n.card-header  {\n    background-color: #e6e6e6 ;\n    border-bottom: none;\n}\n\n.card-body\n{\n    border-top: none;\n    background-color: #e6e6e6 ;\n}\n\n.card\n{\n    margin-top: 10px;\n}\n\n.grey-card\n{\n    background-color: #39393A;\n}\n\n.btn-white\n{\n    color: dimgrey;\n    font-weight: 500;\n    font-size: 12px !important;\n    background-color: white;\n    border: 1px solid white;\n}\n\n.btn-grey\n{\n    background-color: grey;\n    color: white;\n}\n\n.negativ-top-margin\n{\n    margin-top: -28px;\n}\n\n#dev-tech .grey-website\n{\n    color:lightgrey;\n    margin-bottom: inherit;\n    margin-top: 10px;\n    line-height: 1.5;\n}\n\n#dev-tech .text-grey\n{\n    line-height: 1;\n}\n\n#dev-tech .star-ratings-css\n{\n    margin-top: 5px;\n}\n\n/* en panel collapsable*/"

/***/ }),

/***/ "./src/app/website/website.component.html":
/***/ (function(module, exports) {

module.exports = "<app-carousel></app-carousel>\n\n<div class=\"album position-album py-5 bg-light\">\n    <div class=\"container\">\n        <div class=\"special-container\">\n            <p class=\"text-center font-weight-bold\">Site e-commerce de l'activité automobile du groupe Gueudet avec\n                présentation des marques, des concessions et mise en avant du catalogue des véhicules d'occasion\n                proposés à la vente.</p>\n            <div class=\"center-btn\">\n                <button type=\"button\" class=\"btn btn-outline-secondary tags\">VOITURES</button>\n                <button type=\"button\" class=\"btn btn-outline-secondary tags\">DISTRIBUTEUR AUTOMOBILE</button>\n                <button type=\"button\" class=\"btn btn-outline-secondary tags\">CONCESSIONS</button>\n                <button type=\"button\" class=\"btn btn-outline-secondary tags\">OCCASIONS</button>\n                <button type=\"button\" class=\"btn btn-outline-secondary tags\">GARAGES</button>\n                <button type=\"button\" class=\"btn btn-outline-secondary tags\">GUEUDET</button>\n                <button type=\"button\" class=\"btn btn-outline-secondary tags\">RENAULT</button>\n                <button type=\"button\" class=\"btn btn-outline-secondary tags\">BMW</button>\n                <button type=\"button\" class=\"btn btn-outline-secondary tags\">MINI</button>\n                <button type=\"button\" class=\"btn btn-outline-secondary tags\">DACIA</button>\n                <button type=\"button\" class=\"btn btn-outline-secondary tags\">TOYOTA</button>\n                <button type=\"button\" class=\"btn btn-outline-secondary tags\">NISSAN</button>\n                <button type=\"button\" class=\"btn btn-outline-secondary tags\">OPEL</button>\n                <button type=\"button\" class=\"btn btn-outline-secondary tags\">VOLSWAGEN</button>\n            </div>\n        </div>\n        <div class=\"row delete-row-padding panel-info\">\n            <div class=\"col-md-3\">\n                <p class=\"card-text\"><b>Type de site</b></p>\n                <p class=\"card-text grey-website\"><b>Portail groupe</b></p>\n\n                <p class=\"card-text\"><b>Secteur d'activité</b></p>\n                <p class=\"grey-website card-text\"><b>Automobile</b></p>\n\n                <p class=\"card-text\"><b>Cible</b></p>\n                <p class=\"card-text grey-website\"><b>B2C</b></p>\n            </div>\n            <div class=\"col-md-3\">\n                <p class=\"card-text\"><b>Objet</b></p>\n                <p class=\"card-text grey-website\"><b>Refonte globale</b></p>\n\n                <p class=\"card-text\"><b>Budget</b></p>\n                <p class=\"card-text grey-website\"><b>100-150 K€</b></p>\n\n                <p class=\"card-text\"><b>Langues</b></p>\n                <p class=\"card-text grey-website\"><b>FR</b></p>\n            </div>\n            <div class=\"col-md-3\">\n                <p class=\"card-text\"><b>Realisé par</b></p>\n                <p class=\"card-text grey-website\"><b><img class=\"country-drag\" src=\"../../assets/img/fr.png\">Mentalworks</b>\n                </p>\n\n                <p class=\"card-text\"><b>Nom du client</b></p>\n                <p class=\"card-text grey-website\"><b><img class=\"country-drag\" src=\"../../assets/img/fr.png\">Gueudet</b>\n                </p>\n\n                <p class=\"card-text\"><b>Taille du client</b></p>\n                <p class=\"card-text grey-website\"><b>Grande entreprise</b></p>\n            </div>\n            <div class=\"col-md-3\">\n                <p class=\"card-text\"><b>Date de publication</b></p>\n                <p class=\"card-text grey-website\"><b>5 fevrier 2017</b></p>\n\n                <p class=\"card-text\"><b>Crédits</b></p>\n\n                <p class=\"card-text grey-website\"><b>Olivier Salesse</b> (direction artistique)</p>\n                <p class=\"card-text grey-website\"><b>Jean Dupont</b> (conception-rédaction)</p>\n                <p class=\"card-text grey-website\"><b>Charles Villeneuve</b> (architecture)</p>\n            </div>\n        </div>\n        <div class=\"row delete-row-padding panel-focus space-panel\">\n            <div class=\"col-md-3\">\n                <p class=\"card-text text-grey\"><b>Couleurs dominantes</b></p>\n                <div class=\"line\">\n                    <div style=\"background-color: white\" class=\"main-color\"></div>\n                    <div style=\"background-color: orange\" class=\"main-color\"></div>\n                    <div style=\"background-color: lightgrey\" class=\"main-color\"></div>\n                    <div style=\"background-color: grey\" class=\"main-color\"></div>\n                </div>\n            </div>\n            <div class=\"col-md-3\">\n                <p class=\"card-text text-grey\"><b>Style</b></p>\n                <p class=\"style-column card-text grey-website\"><b>Flat design,sobre, vivant, moderne, épuré</b></p>\n            </div>\n            <div class=\"col-md-3\">\n                <div class=\"space-left\">\n                    <p class=\"card-text text-grey\"><b>Comportement</b></p>\n                    <p class=\"style-column card-text grey-website\"><b>Adaptative design</b></p>\n                </div>\n            </div>\n            <div class=\"col-md-3\">\n                <p class=\"card-text text-grey\"><b>Accèssibilité</b></p>\n                <div class=\"star-ratings-css\">\n                    <span class=\"fa fa-star checked\"></span>\n                    <span class=\"fa fa-star \"></span>\n                    <span class=\"fa fa-star \"></span>\n                </div>\n            </div>\n        </div>\n        <!--<h2>MISSIONS CONFIEES A L'AGENCE</h2>-->\n\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <div class=\"col-12\">\n                    <h2>MISSIONS CONFIEES A L'AGENCE<span class=\"float-right clickable card-collapsed\"><i class=\"fa fa-chevron-down\"></i></span></h2>\n                </div>\n            </div>\n            <div style=\"display: none\" class=\"card-body negativ-top-margin\">\n                <div class=\"center-btn\">\n                    <button type=\"button\" class=\"btn btn-outline-secondary btn-white tags\">CONSEIL</button>\n                    <button type=\"button\" class=\"btn btn-outline-secondary btn-white tags\">DEVELOPPEMENT FRONT</button>\n                    <button type=\"button\" class=\"btn btn-outline-secondary btn-white tags\">DEVELOPPEMENT BACK</button>\n                    <button type=\"button\" class=\"btn btn-outline-secondary btn-white tags\">UX/UI DESIGN</button>\n                    <button type=\"button\" class=\"btn btn-outline-secondary btn-white tags\">SEO</button>\n                    <button type=\"button\" class=\"btn btn-outline-secondary btn-white tags\">IDENTITE VISUEL</button>\n                </div>\n            </div>\n        </div>\n\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <div class=\"col-12\">\n                    <h2>FONCTIONNALITES CLES<span class=\"float-right clickable card-collapsed\"><i class=\"fa fa-chevron-down\"></i></span></h2>\n                </div>\n            </div>\n            <div style=\"display: none\" class=\"card-body negativ-top-margin\">\n                <div class=\"center-btn\">\n                    <button type=\"button\" class=\"btn btn-outline-secondary btn-grey tags\">CATALOGUE</button>\n                    <button type=\"button\" class=\"btn btn-outline-secondary btn-grey tags\">PRISE DE RDV EN LIGNE</button>\n                    <button type=\"button\" class=\"btn btn-outline-secondary btn-grey tags\">MULTI-MARQUES</button>\n                    <button type=\"button\" class=\"btn btn-outline-secondary btn-grey tags\">MOTEUR DE RECHERCHE AVANCE</button>\n                    <button type=\"button\" class=\"btn btn-outline-secondary btn-grey tags\">CARTE INTERACTIVE</button>\n                    <button type=\"button\" class=\"btn btn-outline-secondary btn-grey tags\">OFFRES D'EMPLOI</button>\n                    <button type=\"button\" class=\"btn btn-outline-secondary btn-grey tags\">IMPORTATION DES HORAIRES DE CONCESSIONS</button>\n                    <button type=\"button\" class=\"btn btn-outline-secondary btn-grey tags\">MISE A JOUR AUTOMATIQUE DES HORAIRES VERS GOOGLE BUSINESS CENTER</button>\n                    <button type=\"button\" class=\"btn btn-outline-secondary btn-grey tags\">INTERFACAGE AVEC LE CRM CLIENT</button>\n                </div>\n            </div>\n        </div>\n        <div id=\"dev-tech\" class=\"card\">\n            <div class=\"card-header grey-card\">\n                <div class=\"col-12\">\n                    <h2>DEVELOPPEMENT TECHNIQUE<span class=\"float-right clickable card-collapsed\"><i class=\"fa fa-chevron-down\"></i></span></h2>\n                </div>\n            </div>\n            <div style=\"display: none\" class=\"card-body grey-card negativ-top-margin\">\n                <div class=\"row delete-row-padding\">\n                    <div class=\"col-md-3\">\n                        <p class=\"style-column card-text grey-website\"><b>Front</b></p>\n                        <p class=\"card-text text-grey\"><b>HTML5, CS3, AJAX, Twig, Jquery, google maps</b></p>\n                    </div>\n                    <div class=\"col-md-3\">\n                        <p class=\"style-column card-text grey-website\"><b>Back</b></p>\n                        <p class=\"card-text text-grey\"><b>PHP, SYMFONY, Elastic search, Mysql, open source</b></p>\n                    </div>\n                    <div class=\"col-md-3\">\n                        <p class=\"style-column card-text grey-website\"><b>CMS</b></p>\n                        <p class=\"card-text text-grey\"><b>Smartbase (propriétaire)</b></p>\n                    </div>\n                    <div class=\"col-md-3\">\n                        <p class=\"style-column card-text grey-website\"><b>Chalenge technique</b></p>\n                        <div class=\"star-ratings-css\">\n                            <span class=\"fa fa-star checked\"></span>\n                            <span class=\"fa fa-star checked \"></span>\n                            <span class=\"fa fa-star checked\"></span>\n                            <span class=\"fa fa-star checked\"></span>\n                            <span class=\"fa fa-star \"></span>\n                        </div>\n                    </div>\n                    <div class=\"col-md-12\">\n                        <p class=\"style-column card-text grey-website\"><b>Points remarquables</b></p>\n                        <p class=\"card-text text-grey\">Le site est interfacé avec le CRM du client via des API avec synchronisation quotidienne automatique des annonces et des flux du référenciel des marques. Le site est multimarques et évolutif. Les pages des concessions et des offres d'emploi sont également reliées avec le système d'information du client via des API. Le site s'interface avec un webservice dédié pour trouver les caractéristiques du véhicule en fonction de sa plaque d'immatriculation. </p>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>\n\n</div>\n"

/***/ }),

/***/ "./src/app/website/website.component.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return WebsiteComponent; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var WebsiteComponent = /** @class */ (function () {
    function WebsiteComponent() {
    }
    WebsiteComponent.prototype.ngOnInit = function () {
    };
    WebsiteComponent = __decorate([
        Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["Component"])({
            selector: 'app-website',
            template: __webpack_require__("./src/app/website/website.component.html"),
            styles: [__webpack_require__("./src/app/website/website.component.css")]
        }),
        __metadata("design:paramtypes", [])
    ], WebsiteComponent);
    return WebsiteComponent;
}());



/***/ }),

/***/ "./src/environments/environment.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return environment; });
// The file contents for the current environment will overwrite these during build.
// The build system defaults to the dev environment which uses `environment.ts`, but if you do
// `ng build --env=prod` then `environment.prod.ts` will be used instead.
// The list of which env maps to which file can be found in `.angular-cli.json`.
var environment = {
    production: false
};


/***/ }),

/***/ "./src/main.ts":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__angular_core__ = __webpack_require__("./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__angular_platform_browser_dynamic__ = __webpack_require__("./node_modules/@angular/platform-browser-dynamic/esm5/platform-browser-dynamic.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__app_app_module__ = __webpack_require__("./src/app/app.module.ts");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__environments_environment__ = __webpack_require__("./src/environments/environment.ts");




if (__WEBPACK_IMPORTED_MODULE_3__environments_environment__["a" /* environment */].production) {
    Object(__WEBPACK_IMPORTED_MODULE_0__angular_core__["enableProdMode"])();
}
Object(__WEBPACK_IMPORTED_MODULE_1__angular_platform_browser_dynamic__["a" /* platformBrowserDynamic */])().bootstrapModule(__WEBPACK_IMPORTED_MODULE_2__app_app_module__["a" /* AppModule */])
    .catch(function (err) { return console.log(err); });


/***/ }),

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./src/main.ts");


/***/ })

},[0]);
//# sourceMappingURL=main.bundle.js.map