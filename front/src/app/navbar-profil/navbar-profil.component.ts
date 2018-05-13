import {Component, OnInit} from '@angular/core';
import {AuthenticationService} from "../../providers/authentication.service";
import {Router} from "@angular/router";

@Component({
    selector: 'app-navbar-profil',
    templateUrl: './navbar-profil.component.html',
    styleUrls: ['./navbar-profil.component.css']
})
export class NavbarProfilComponent implements OnInit {

    constructor(public authenticationService: AuthenticationService, public router: Router) {
    }

    ngOnInit() {

    }

    /* return true if user is loggin */
    hasAuthToken() {
        return localStorage.getItem('id_token') !== null;
    }

    logout() {
        this.authenticationService.logout();
        this.router.navigate(['home']);
    }

    navToMyProfile() {
        let username = this.authenticationService.getUsernameCurrentUser();
        console.log(username);
        this.router.navigate(['profil',username])
    }
}
