// app.module.ts
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { ReactiveFormsModule } from '@angular/forms';
import { Http, HttpModule, RequestOptions } from '@angular/http';
import { AuthHttp, AuthConfig } from 'angular2-jwt';
import { AppComponent } from './app.component';
import { Routing } from './app.routing';
import { AuthGuard } from './_guard/index';
import { AuthenticationService } from './authentication/authentication.service';
import { PostComponent } from './post/post.component';
import {NavbarComponent} from "./navbar/navbar.component";
import {SearchComponent} from "./search/search.component";
import {CarouselComponent} from "./carousel/carousel.component";
import {WebsiteFrontComponent} from "./website-front/website-front.component";
import {FooterComponent} from "./footer/footer.component";
import {FrontCardsComponent} from "./front-cards/front-cards.component";
import {LoginComponent} from "./login/login.component";

export function authHttpServiceFactory(http: Http, options: RequestOptions) {
    return new AuthHttp( new AuthConfig({}), http, options);
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
    ],
    imports: [
        BrowserModule,
        ReactiveFormsModule,
        HttpModule,
        Routing,
    ],
    providers: [
        {
            provide: AuthHttp,
            useFactory: authHttpServiceFactory,
            deps: [ Http, RequestOptions ]
        },
        AuthGuard,
        AuthenticationService,
    ],
    bootstrap: [AppComponent]
})
export class AppModule { }
