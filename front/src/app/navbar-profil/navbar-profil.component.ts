import {Component, OnInit} from '@angular/core';
import {AuthenticationService} from "../../providers/authentication.service";
import {Router,ActivatedRoute} from "@angular/router";
import {User} from "../model/user";
import Member = User.Member;
import {UserService} from "../../providers/user-service.service";

@Component({
    selector: 'app-navbar-profil',
    templateUrl: './navbar-profil.component.html',
    styleUrls: ['./navbar-profil.component.css']
})
export class NavbarProfilComponent implements OnInit {

    username:string;
    user:Member;
    constructor(public authenticationService: AuthenticationService, public router: Router,public route: ActivatedRoute, private userService: UserService) {
    }

    ngOnInit() {
        this.getUser();
    }

    /* return true if user is loggin */
    hasAuthToken() {
        return localStorage.getItem('id_token') !== null;
    }

    logout() {
        this.authenticationService.logout();
        this.router.navigate(['home']);
    }
    getUser() {
        this.route.params.subscribe(params => {
            this.username = params['username']; // (+) converts string 'id' to a number
        });
        console.log('username : ' + this.username);
        this.userService.getByUsername(this.username)
            .subscribe(data => {
                console.log(data);
                this.user = data
            });
    }

    navToMyProfile() {
        let username = this.authenticationService.getUsernameCurrentUser();
        console.log(username);
        this.router.navigate(['profil',username])
    }
}
