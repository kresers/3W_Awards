import { Component, OnInit } from '@angular/core';
import {Website} from "../model/website";
import {WebsitesService} from "../../providers/websites.service";

@Component({
  selector: 'app-nominated',
  templateUrl: './nominated.component.html',
  styleUrls: ['./nominated.component.css']
})
export class NominatedComponent implements OnInit {

    website: Website;

    constructor(private websiteService: WebsitesService) {
    }

    ngOnInit() {
        this.getAll();
    }

    getAll() {
        this.websiteService.getWebsites()
            .subscribe(data => {
                console.log(data);
                this.website = data;
            });
    }

}
