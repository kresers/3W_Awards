// app.routing.ts
import { NgModule} from '@angular/core';
import {CommonModule} from '@angular/common';
import { Routes, RouterModule } from '@angular/router';
import { PostComponent } from './post/post.component';
import { AuthGuard } from './_guard/index';
import {LoginComponent} from './login/login.component';
import {HomeComponent} from './home/home.component';
import {AgencyComponent} from './agency/agency.component';
import {ProfilComponent} from './profil/profil.component';
import {ClientComponent} from './client/client.component';
import {ProfileNotedProjectsComponent} from "./profile-noted-projects/profile-noted-projects.component";
import {ProfilInfoComponent} from "./profil-info/profil-info.component";
import {ProfilMyProfilComponent} from "./profil-my-profil/profil-my-profil.component";
import {WebsiteComponent} from "./website/website.component";

const routes: Routes = [
    {
        path: '',
        component: HomeComponent,
    },
    {
      path: 'agency',
      component: AgencyComponent
    },
    {
        path: 'login',
        component: LoginComponent,
    },
    {
        path: 'profil',
        component: ProfilComponent,
        children:[
            {
                path: 'myProfil',
                component: ProfilMyProfilComponent
            },
            {
                path: 'profilNotedProjects',
                component: ProfileNotedProjectsComponent,
            }
        ]
    },
    {
      path: 'client',
      component: ClientComponent,
    },
    {
        path: 'admin',
        component: PostComponent,
        canActivate: [AuthGuard]
    },
    {
        path: 'website',
        component: WebsiteComponent,
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
