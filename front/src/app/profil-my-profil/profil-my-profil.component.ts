import {Component, OnInit} from '@angular/core';
import {ActivatedRoute} from "@angular/router";
import {UserService} from "../../providers/user-service.service";
import {User} from "../model/user";
import Member = User.Member;
import {AuthenticationService} from "../../providers/authentication.service";
import {LoaderService} from "../../providers/loader.service";

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
  showLoader: boolean;
  constructor(public route: ActivatedRoute, private userService: UserService,private authService: AuthenticationService,private loaderService:LoaderService) {
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
                this.firstName = data.firstName;
                this.loaderService.display(false);
            });
    }
}
