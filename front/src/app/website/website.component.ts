import {Component, OnInit} from '@angular/core';
import {WebsitesService} from '../../providers/websites.service';
import {Website} from '../model/website';
import { ActivatedRoute, Params } from '@angular/router';
import { Location } from '@angular/common';


@Component({
  selector: 'app-website',
  templateUrl: './website.component.html',
  styleUrls: ['./website.component.css']
})
export class WebsiteComponent implements OnInit {

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
