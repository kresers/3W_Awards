import {Component, OnInit} from '@angular/core';
import {ActivatedRoute} from "@angular/router";
import {UserService} from "../../providers/user-service.service";
import {AuthenticationService} from "../../providers/authentication.service";
import {LoaderService} from "../../providers/loader.service";
import {LoadDataForSelectService} from "../../providers/loadDataForSelect.service";
import {Country} from "../model/country";
import {IMultiSelectOption, IMultiSelectSettings, IMultiSelectTexts} from "angular-2-dropdown-multiselect";
import {Category} from "../model/category";

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
    civilityM: boolean;
    civilityF: boolean;
    showLoader: boolean;
    email: string;
    birthday: any;
    countries: Country;
    country: any;
    presentation: string;
    job: string;
    optionsModel: number[] = [1, 2];
    categories: any;
    category: Category;
    interestCenter: string;

    // Url
    websiteUrl: string;
    facebook: string;
    twitter: string;
    instagram: string;
    linkedIn: string;
    behance: string;
    dribble: string;
    password: string;


// Settings configuration
    mySettings: IMultiSelectSettings = {
        enableSearch: true,
        checkedStyle: 'fontawesome',
        buttonClasses: 'form-control clickable',
        dynamicTitleMaxItems: 3,
        displayAllSelectedText: true
    };

// Text configuration
    myTexts: IMultiSelectTexts = {
        checkAll: 'Tous selectionner',
        uncheckAll: 'Tous déselectionner',
        checked: 'selectionnez d\'autres compétences',
        checkedPlural: 'compétences selectionnées',
        searchPlaceholder: 'Chercher',
        searchEmptyResult: 'Aucun resultat...',
        searchNoRenderText: 'Type in search box to see resul...',
        defaultTitle: 'Selectionnez compétences',
        allSelected: 'Toute les compétences sont selectionnées',
    };

    myOptions: IMultiSelectOption[];

    constructor(public route: ActivatedRoute, private userService: UserService, private authService: AuthenticationService,
                private loaderService: LoaderService, private loadDataForSelectService: LoadDataForSelectService) {
        loaderService.status.subscribe((val: boolean) => {
            this.showLoader = val;
        });
    }

    ngOnInit() {
        this.getUser();
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
                if (data.country) {
                    this.country = data.country.label;
                }
                else {
                    this.country = null;
                }
                this.presentation = data.presentation;
                this.job = data.job;
                this.interestCenter = data.interest_center;
                this.facebook = data.facebook;
                this.twitter = data.twitter;
                this.linkedIn = data.linked_in;
                this.dribble = data.dribble;
                this.behance = data.behance;
                this.websiteUrl = data.url_website;
                this.instagram = data.instagram;

                this.getAllCountries();
                this.getAllCategories();
            });
    }

    /**
     * Description : In this function we use descriptor to get new value of input cause we don t have form
     * We cant use form cause we use packages like multi select and we cant bind the value with formGroups
     */
    onSubmit() {

        this.getCurrentDatas();

        // this.firstName = data.first_name;
        // this.civility = data.gender;
        // this.email = data.email;
        // this.birthday = data.birth_date;
        // if (data.country) {
        //     this.country = data.country.label;
        // }
        // else {
        //     this.country = null;
        // }
        // this.presentation = data.presentation;
        // this.job = data.job;
        // this.interestCenter = data.interest_center;
        // this.facebook = data.facebook;
        // this.twitter = data.twitter;
        // this.linkedIn = data.linked_in;
        // this.dribble = data.dribble;
        // this.behance = data.behance;
        // this.websiteUrl = data.url_website;
        // this.instagram = data.instagram;
    }

    /**
     * Description : this function keep and return current value in profil inputs
     */
    protected getCurrentDatas()
    {
        this.firstName = document.getElementById('firstName').value;
        this.civilityM = document.getElementById('inlineCheckbox1').checked;
        this.civilityF = document.getElementById('inlineCheckbox2').checked;

        // we transmit this.civility to API post
        switch (true) {
            case this.civilityM == true:
                this.civility = 'M';
                break;
            case this.civilityF == true:
                this.civility = 'F';
                break;
            default:
                this.civility = '';
                break;
        }
        this.pseudo = document.getElementById('lastName').value;
        this.email = document.getElementById('inputEmail').value;
        this.password = document.getElementById('inputPassword').value;
        this.birthday = document.getElementById('birthday').value;
        let select = document.getElementById("FormControlSelect1");
        this.country = select.options[select.selectedIndex].text;
        this.job = document.getElementById('profession').value;
        this.presentation = document.getElementById('inputPresentation').value;
        let multiSelect = document.getElementsByClassName("dropdown-menu");
        console.log(multiSelect);
        let selected1 = [];

    }

    protected getAllCountries() {
        this.loadDataForSelectService.getCountry()
            .subscribe(data => {
                console.log(data);
                this.countries = data;
            });
    }


    protected getAllCategories() {
        this.loadDataForSelectService.getCategory()
            .subscribe(data => {
                console.log(data);
                this.categories = data;
                console.log(this.categories);
                this.myOptions = this.categories;
                this.loaderService.display(false);
            });
    }

}
