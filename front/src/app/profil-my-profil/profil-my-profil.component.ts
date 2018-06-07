import {Component, OnInit} from '@angular/core';
import {ActivatedRoute} from "@angular/router";
import {UserService} from "../../providers/user-service.service";
import {User} from "../model/user";
import Member = User.Member;
import {AuthenticationService} from "../../providers/authentication.service";
import {LoaderService} from "../../providers/loader.service";
import {LoadDataForSelectService} from "../../providers/loadDataForSelect.service";
import {Country} from "../model/country";

@Component({
  selector: 'app-profil-my-profil',
  templateUrl: './profil-my-profil.component.html',
  styleUrls: ['./profil-my-profil.component.css']
})
export class ProfilMyProfilComponent implements OnInit {

  username: string;
  user: any;
  pseudo: string;
  firstName: string;
  civility: string;
  showLoader: boolean;
  email:string;
  birthday:any;
  countries: Country;
  country:string;
  presentation:string;
  job:string;
  constructor(public route: ActivatedRoute, private userService: UserService,private authService: AuthenticationService,private loaderService:LoaderService,private loadDataForSelectService:LoadDataForSelectService) {
      loaderService.status.subscribe((val: boolean) => {
          this.showLoader = val;
      });
  }

  ngOnInit() {
      this.getUser()
  }

    getUser() {
        this.loaderService.display(true);
        this.username = this.authService.getUsername(); // get username by token
        this.userService.getByUsername(this.username)
            .subscribe(data => {
                this.pseudo = this.username;
                this.firstName = data.first_name;
                this.civility = data.gender;
                this.email = data.email;
                this.birthday = data.birth_date;
                this.country = data.country;
                this.presentation = data.presentation;
                this.job = data.job;

                this.getAllCountries();
            });
    }

    getAllCountries() {
        this.loadDataForSelectService.getCountry()
            .subscribe(data => {
                console.log(data);
                this.countries = data;
                this.loaderService.display(false);
            });
    }
}
