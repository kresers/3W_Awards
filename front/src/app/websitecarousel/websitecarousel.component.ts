import { Component, OnInit } from '@angular/core';
import {WebsitesService} from '../../providers/websites.service';
import {Website} from '../model/website';
import {Location} from '@angular/common';
import {ActivatedRoute} from '@angular/router';

@Component({
  selector: 'app-websitecarousel',
  templateUrl: './websitecarousel.component.html',
  styleUrls: ['./websitecarousel.component.css']
})
export class WebsitecarouselComponent implements OnInit {


    website: Website;
    constructor(private websiteService: WebsitesService, private activatedRoute: ActivatedRoute, private location: Location) {
    }

    ngOnInit() {
        this.getWebsite();
    }

    getWebsite() {
        const id  = +this.activatedRoute.snapshot.paramMap.get('id');
        this.websiteService.getWebsite(id)
            .subscribe(data => {
                console.log(data);
                this.website = data;
            });
    }


}
