import {Component, OnInit} from '@angular/core';
import {AuthenticationService} from '../../providers/authentication.service';
import {Router, ActivatedRoute} from '@angular/router';
import {User} from '../model/user';
import Member = User.Member;
import {UserService} from '../../providers/user-service.service';

@Component({
    selector: 'app-navbar-profil',
    templateUrl: './navbar-profil.component.html',
    styleUrls: ['./navbar-profil.component.css']
})
export class NavbarProfilComponent implements OnInit {

    username: string;
    user: any;
    image: string;
    constructor(public authenticationService: AuthenticationService, public router: Router, public route: ActivatedRoute, private userService: UserService) {
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
        this.router.navigate(['']);
    }

    getUser() {
        const username = this.authenticationService.getUsername();
        this.userService.getByUsername(username)
            .subscribe(data => {
                this.image = data.image;
            });
    }

    navToMyProfile() {
        const username = this.authenticationService.getUsernameCurrentUser();
        this.router.navigate(['profil', username]);
    }
}
