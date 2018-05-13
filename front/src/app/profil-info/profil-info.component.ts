import {Component, OnInit} from '@angular/core';
import {ActivatedRoute, Router} from "@angular/router";
import {UserService} from "../../providers/user-service.service";

@Component({
    selector: 'app-profil-info',
    templateUrl: './profil-info.component.html',
    styleUrls: ['./profil-info.component.css']
})
export class ProfilInfoComponent implements OnInit {

    isActive = true;


    constructor(private route: ActivatedRoute, public  userService: UserService) {
    }

    ngOnInit() {
    }

    id: any;
    user: any;

    addActiveClass(id: any) {
        this.id = id;
    }




}
