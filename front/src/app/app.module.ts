import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';


import { AppComponent } from './app.component';
import { NavbarComponent } from './navbar/navbar.component';
import { SearchComponent } from './search/search.component';
import { CarouselComponent } from './carousel/carousel.component';
import { WebsiteFrontComponent } from './website-front/website-front.component';
import { FooterComponent } from './footer/footer.component';
import { FrontCardsComponent } from './front-cards/front-cards.component';


@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    SearchComponent,
    CarouselComponent,
    WebsiteFrontComponent,
    FooterComponent,
    FrontCardsComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
