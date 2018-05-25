// app.routing.ts
import {InjectionToken, NgModule} from '@angular/core';
import {CommonModule} from '@angular/common';
import {Routes, RouterModule, ActivatedRouteSnapshot} from '@angular/router';
import {PostComponent} from './post/post.component';
import {AuthGuard} from './_guard/index';
import {LoginComponent} from './login/login.component';
import {HomeComponent} from './home/home.component';
import {AgencyComponent} from './agency/agency.component';
import {ProfilComponent} from './profil/profil.component';
import {ClientComponent} from './client/client.component';
import {ProfileNotedProjectsComponent} from './profile-noted-projects/profile-noted-projects.component';
import {ProfilInfoComponent} from './profil-info/profil-info.component';
import {ProfilMyProfilComponent} from './profil-my-profil/profil-my-profil.component';
import {WebsiteComponent} from './website/website.component';
import {WebsiteFormComponent} from './website-form/website-form.component';
import {AppComponent} from "./app.component";
import {NavbarComponent} from "./navbar/navbar.component";
import {NominatedComponent} from "./nominated/nominated.component";
import {AwardsComponent} from "./awards/awards.component";


const externalUrlProvider = new InjectionToken('externalUrlRedirectResolver');
const routes: Routes = [
    {
        path: '',
        component: HomeComponent,
    },
    {
        path: 'submitWebsite',
        component: WebsiteFormComponent,
    },
    {
        path: 'agency/:id',
        component: AgencyComponent,
    },
    {
        path: 'login',
        component: LoginComponent,
    },
    {
        path: 'profil/:username',
        component: ProfilComponent,
        children: [
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
        path: 'client/:id',
        component: ClientComponent,
    },
    {
        path: 'admin',
        component: PostComponent,
        canActivate: [AuthGuard]
    },
    {
        path: 'website/:id',
        component: WebsiteComponent,
    },
    {
        path: 'nominated',
        component: NominatedComponent,
    },
    {
        path: 'awards',
        component: AwardsComponent,
    },
];

@NgModule({
    providers: [
        {
            provide: externalUrlProvider,
            useValue: (route: ActivatedRouteSnapshot) => {
                const externalUrl = route.paramMap.get('externalUrl');
                window.open(externalUrl, '_self');
            },
        },
    ],
    imports: [
        CommonModule,
        RouterModule.forRoot(routes),
    ],
    exports: [RouterModule],
    declarations: [],
})

export class AppRouting {
}
