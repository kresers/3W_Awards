import {Component, OnInit} from '@angular/core';
import {ActivatedRoute, Router} from "@angular/router";
import {UserService} from "../../providers/user-service.service";
import {User} from "../model/user";
import Member = User.Member;

@Component({
    selector: 'app-profil-info',
    templateUrl: './profil-info.component.html',
    styleUrls: ['./profil-info.component.css']
})
export class ProfilInfoComponent implements OnInit {

    isActive = true;

    username: string;
    user: any;
    role : string;
    roles =  [];
    mainSkin: string;
    country:string;
    loading : boolean;
    constructor(private route: ActivatedRoute, public  userService: UserService) {

    }

    ngOnInit() {
        this.getUser()
    }

    getUser() {
        this.loading = true;
        this.route.params.subscribe(params => {
            this.username = params['username'];
        });
        console.log('username : ' + this.username);
        this.userService.getByUsername(this.username)
            .subscribe(data => {
                console.log(data);
                this.user = data;
                this.initValue();
                this.loading = false;
            });
    }

    id: any;
    addActiveClass(id: any) {
        this.id = id;
    }

    initValue()
    {

        this.roles = this.user.roles;
        this.roles.forEach((val, index) => {
            if (val == 'ROLE_ADMIN')
            {
                this.role = 'Administrateur';
            }
            else
            {
                this.role = 'Membre'
            }
        });
        this.mainSkin = this.user.main_skin;
        this.country = this.user.country;

    }
}
