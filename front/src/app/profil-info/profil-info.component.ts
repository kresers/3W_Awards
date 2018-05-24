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
    user: Member;
    constructor(private route: ActivatedRoute, public  userService: UserService) {
    }

    ngOnInit() {
        this.getUser()
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

    id: any;
    addActiveClass(id: any) {
        this.id = id;
    }




}
