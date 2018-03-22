// app.routing.ts
import { NgModule} from '@angular/core';
import {CommonModule} from '@angular/common';
import { Routes, RouterModule } from '@angular/router';
import { PostComponent } from './post/post.component';
import { AuthGuard } from './_guard/index';
import {LoginComponent} from './login/login.component';
import {AppComponent} from './app.component';
import { HomeComponent} from './home/home.component';
import {ProfilComponent} from "./profil/profil.component";

const routes: Routes = [
    {
        path: '',
        component: HomeComponent,
    },
    {
        path: 'login',
        component: LoginComponent,
    },
    {
        path: 'profil',
        component: ProfilComponent,
    },
    {
        path: 'admin',
        component: PostComponent,
        canActivate: [AuthGuard]
    },
    { path: '**', redirectTo: '' }
];

@NgModule({
  imports: [
    CommonModule,
    RouterModule.forRoot(routes),
  ],
  exports: [RouterModule],
  declarations:  [],
})

export class AppRouting {
}
