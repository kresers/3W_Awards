import {Component, OnInit} from '@angular/core';
import {ActivatedRoute, Router} from "@angular/router";
import {UserService} from "../../providers/user-service.service";
import {LoaderService} from "../../providers/loader.service";

@Component({
    selector: 'app-profil-info',
    templateUrl: './profil-info.component.html',
    styleUrls: ['./profil-info.component.css']
})
export class ProfilInfoComponent implements OnInit {

    username: string;
    user: any;
    role : string;
    roles =  [];
    mainSkin: string;
    country:string;
    loading : boolean;
    image : string;
    websiteUrl: string;
    presentation: string;
    categories: Array<Object>;
    showLoader:boolean;

    constructor(private route: ActivatedRoute, public  userService: UserService,private loaderService: LoaderService) {
        loaderService.status.subscribe((val: boolean) => {
            this.showLoader = val;
        });
    }

    ngOnInit() {
        this.getUser()
    }

    getUser() {
        this.loaderService.display(true);
        this.route.params.subscribe(params => {
            this.username = params['username'];
        });
        this.userService.getByUsername(this.username)
            .subscribe(data => {
                console.log(data);
                this.user = data;
                this.initValue();
            });
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
        this.country = this.user.country.label;
        this.image = this.user.image;
        this.websiteUrl = this.user.url_website;
        this.presentation = this.user.presentation;
        this.categories = this.user.category;
        this.loaderService.display(false);

    }
}
