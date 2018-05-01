import {Component, OnInit} from '@angular/core';
import {Website} from "../model/website";
import {WebsitesService} from "../../providers/websites.service";

@Component({
  selector: 'app-carousel',
  templateUrl: './carousel.component.html',
  styleUrls: ['./carousel.component.css']
})
export class CarouselComponent implements OnInit {

  website: Website;
  constructor(private websiteService: WebsitesService) {
  }

  ngOnInit() {
    this.getWebsite()
  }
  getWebsite(){
    this.websiteService.getWebsites()
      .subscribe(
        data => {
          console.log(data);
          this.website = data
        });
  }

}
