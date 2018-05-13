import {Component, OnInit} from '@angular/core';
import {ActivatedRoute} from "@angular/router";
import {UserService} from "../../providers/user-service.service";

@Component({
    selector: 'app-profil',
    templateUrl: './profil.component.html',
    styleUrls: ['./profil.component.css']
})
export class ProfilComponent implements OnInit {
    username:string;
    user:any;

    constructor(public route: ActivatedRoute,public userService:UserService) {
    }

    ngOnInit() {
        this.getUser();
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

}
