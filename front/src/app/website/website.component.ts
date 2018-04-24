import {Component, OnInit} from '@angular/core';
import {WebsitesService} from '../../providers/websites.service';
import {Website} from "../model/website";


@Component({
  selector: 'app-website',
  templateUrl: './website.component.html',
  styleUrls: ['./website.component.css']
})
export class WebsiteComponent implements OnInit {

  website: Website;
  constructor(private websiteService: WebsitesService) {
  }

  ngOnInit() {
  }

  getWebsites() {
    this.websiteService.getWebsites()
      .subscribe(
        website => this.website = website
      );
  }

  getWebsite(website) {
    this.websiteService.getWebsite(website.id)
      .subscribe(
        data => this.website = website
      );
  }


}
