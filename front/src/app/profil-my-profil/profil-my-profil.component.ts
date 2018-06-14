import {Component, ElementRef, OnInit, ViewChild} from '@angular/core';
import {ActivatedRoute} from "@angular/router";
import {UserService} from "../../providers/user-service.service";
import {AuthenticationService} from "../../providers/authentication.service";
import {LoaderService} from "../../providers/loader.service";
import {LoadDataForSelectService} from "../../providers/loadDataForSelect.service";
import {Country} from "../model/country";
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
    civilityM: any;
    civilityF: any;
    showLoader: boolean;
    email: string;
    birthday: any;
    countries: Country;
    country: any;
    presentation: string;
    job: string;
    dropdownList = [];
    selectedItems = [];
    dropdownSettings = {};
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


// // Settings configuration
//     mySettings: IMultiSelectSettings = {
//         enableSearch: true,
//         checkedStyle: 'fontawesome',
//         buttonClasses: 'form-control clickable',
//         dynamicTitleMaxItems: 3,
//         displayAllSelectedText: true
//     };
//
// // Text configuration
//     myTexts: IMultiSelectTexts = {
//         checkAll: 'Tous selectionner',
//         uncheckAll: 'Tous déselectionner',
//         checked: 'selectionnez d\'autres compétences',
//         checkedPlural: 'compétences selectionnées',
//         searchPlaceholder: 'Chercher',
//         searchEmptyResult: 'Aucun resultat...',
//         searchNoRenderText: 'Type in search box to see resul...',
//         defaultTitle: 'Selectionnez compétences',
//         allSelected: 'Toute les compétences sont selectionnées',
//     };
//
//     myOptions: IMultiSelectOption[];

    constructor(public route: ActivatedRoute, private userService: UserService, private authService: AuthenticationService,
                private loaderService: LoaderService, private loadDataForSelectService: LoadDataForSelectService) {
        loaderService.status.subscribe((val: boolean) => {
            this.showLoader = val;
        });

        this.dropdownSettings = {
            singleSelection: false,
            text: "Select Categories",
            selectAllText: 'Tous selectionner',
            unSelectAllText: 'Tous déselectionnez',
            enableSearchFilter: true,
            classes: ""
        };

    }

    onItemSelect(item:any){
        console.log(item);
        console.log(this.selectedItems);
    }
    OnItemDeSelect(item:any){
        console.log(item);
        console.log(this.selectedItems);
    }
    onSelectAll(items: any){
        console.log(items);
    }
    onDeSelectAll(items: any){
        console.log(items);
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
               console.log(data.category) ;

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
     * Description : this function keep and return current value of profil inputs
     */
    @ViewChild('checkM')
    checkM: ElementRef;// look checkbox input and see #checkM attr to understand
    @ViewChild('checkF')
    checkF: ElementRef;// look checkbox input and see #checkF attr to understand
    protected getCurrentDatas() {
        this.firstName = document.getElementById('firstName').textContent;
        this.civilityM = this.checkM.nativeElement.checked;
        this.civilityF = this.checkF.nativeElement.checked;

        // we transmit this.civility to API post not civilityF and civilityM
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
        this.pseudo = document.getElementById('lastName').textContent;
        this.email = document.getElementById('inputEmail').textContent;
        this.password = document.getElementById('inputPassword').textContent;
        this.birthday = document.getElementById('birthday').textContent;
        this.country = document.getElementById("FormControlSelect1").getAttribute("ng-reflect-model"); // for simple select
        this.job = document.getElementById('profession').textContent;
        this.presentation = document.getElementById('inputPresentation').textContent;
    }

    /**
     * Description : load all countries into simple select  of api
     */
    getAllCountries() {
        this.loadDataForSelectService.getCountry()
            .subscribe(data => {
                this.countries = data;
            });
    }

    /**
     * Description : load into multi-select all categories of api
     */
    protected

    getAllCategories() {
        this.loadDataForSelectService.getCategory()
            .subscribe(data => {
                this.categories = data;
                this.dropdownList = this.categories;
                console.log(this.dropdownList);
                console.log(this.selectedItems);
                // this.myOptions = ;
                this.loaderService.display(false);
            });
    }

}
