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
    this.getWebsite(1)
  }

  getWebsite(int) {
    this.websiteService.getWebsite(int)
      .subscribe(data => {
        console.log(data);
        this.website = data
      });
  }


}
