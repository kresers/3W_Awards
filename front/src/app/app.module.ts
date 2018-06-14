// app.module.ts
import {BrowserModule} from '@angular/platform-browser';
import {NgModule} from '@angular/core';
import {FormsModule, ReactiveFormsModule} from '@angular/forms';
import {Http, HttpModule, RequestOptions} from '@angular/http';
import {HTTP_INTERCEPTORS, HttpClientModule} from '@angular/common/http';
import {AuthHttp, AuthConfig} from 'angular2-jwt';
import {AppComponent} from './app.component';
import {AppRouting} from './app.routing';
import {AuthGuard} from './_guard/index';
import {AuthenticationService} from '../providers/authentication.service';
import {PostComponent} from './post/post.component';
import {NavbarComponent} from './navbar/navbar.component';
import {SearchComponent} from './search/search.component';
import {CarouselComponent} from './carousel/carousel.component';
import {WebsiteFrontComponent} from './website-front/website-front.component';
import {FooterComponent} from './footer/footer.component';
import {FrontCardsComponent} from './front-cards/front-cards.component';
import {LoginComponent} from './login/login.component';
import {RegisterComponent} from './register/register.component';
import {LikeComponent} from './like/like.component';
import {WebsiteComponent} from './website/website.component';
import {HomeComponent} from './home/home.component';
import {AgencyComponent} from './agency/agency.component';
import {CardsAgencyComponent} from './cards-agency/cards-agency.component';
import {InfoAgencyComponent} from './info-agency/info-agency.component';
import {ProfilComponent} from './profil/profil.component';
import {ProfilInfoComponent} from './profil-info/profil-info.component';
import {ProfilMyProfilComponent} from './profil-my-profil/profil-my-profil.component';
import {ClientComponent} from './client/client.component';
import {ClientCardsComponent} from './client-cards/client-cards.component';
import {ClientInfoComponent} from './client-info/client-info.component';
import {ProfileNotedProjectsComponent} from './profile-noted-projects/profile-noted-projects.component';
import {WebsiteFormComponent} from './website-form/website-form.component';
import {UserService} from '../providers/user-service.service';
import {JwtInterceptor} from '../interceptor/jwt.interceptor';
import {ErrorInterceptor} from '../interceptor/error.interceptor';
import {AlertComponent} from './alert/alert.component';
import {AlertService} from '../providers/alert.service';
import {WebsitesService} from '../providers/websites.service';
import {AgencyService} from '../providers/agency.service';
import {NavbarProfilComponent} from './navbar-profil/navbar-profil.component';
import {NgbModule} from '@ng-bootstrap/ng-bootstrap';
import {CustomerService} from '../providers/customer.service';
import {NominatedComponent} from './nominated/nominated.component';
import {AwardsComponent} from './awards/awards.component';
import {AwardService} from '../providers/award.service';
import {CategAwardService} from '../providers/categAward.service';
import {VoteCriteriaService} from '../providers/voteCriteria.service';
import {TechnologyService} from '../providers/technology.service';
import {ColorService} from '../providers/color.service';
import {CountryService} from '../providers/country.service';
import {LoaderService} from '../providers/loader.service';
import {WebsitecarouselComponent} from './websitecarousel/websitecarousel.component';
import {LoadDataForSelectService} from '../providers/loadDataForSelect.service';
import {Ng2ImgMaxModule} from 'ng2-img-max';
import {ImageCropperModule} from 'ngx-image-cropper';
import { ContactComponent } from './contact/contact.component';
import {ContactService} from '../providers/contact.service';
import {AngularMultiSelectModule} from 'angular2-multiselect-dropdown';
import { AboutComponent } from './about/about.component';

export function authHttpServiceFactory(http: Http, options: RequestOptions) {
    return new AuthHttp(new AuthConfig({}), http, options);
}

@NgModule({
    declarations: [
        AppComponent,
        NavbarComponent,
        SearchComponent,
        CarouselComponent,
        WebsiteFrontComponent,
        FooterComponent,
        FrontCardsComponent,
        WebsiteFrontComponent,
        LoginComponent,
        PostComponent,
        RegisterComponent,
        LikeComponent,
        WebsiteComponent,
        HomeComponent,
        AgencyComponent,
        CardsAgencyComponent,
        InfoAgencyComponent,
        ProfilComponent,
        ProfilInfoComponent,
        ProfilMyProfilComponent,
        ClientComponent,
        ClientCardsComponent,
        ClientInfoComponent,
        ProfileNotedProjectsComponent,
        WebsiteFormComponent,
        AlertComponent,
        NavbarProfilComponent,
        NominatedComponent,
        AwardsComponent,
        WebsitecarouselComponent,
        ContactComponent,
        AboutComponent,
    ],
    imports: [
        BrowserModule,
        HttpClientModule,
        ReactiveFormsModule,
        HttpModule,
        AppRouting,
        FormsModule,
        ReactiveFormsModule,
        HttpClientModule,
        NgbModule.forRoot(),
        AngularMultiSelectModule
    ],
    exports: [],

    providers: [
        {
            provide: AuthHttp,
            useFactory: authHttpServiceFactory,
            deps: [Http, RequestOptions],
        },
        AuthGuard,
        AuthenticationService,
        UserService,
        JwtInterceptor,
        ErrorInterceptor,
        AlertService,
        WebsitesService,
        CustomerService,
        AgencyService,
        TechnologyService,
        ColorService,
        CountryService,
        LoaderService,
        LoadDataForSelectService,
        ContactService,
        {
            provide: HTTP_INTERCEPTORS,
            useClass: JwtInterceptor,
            multi: true
        },
        AwardService,
        VoteCriteriaService,
        CategAwardService
    ],
    bootstrap: [AppComponent],
})
export class AppModule {
}
