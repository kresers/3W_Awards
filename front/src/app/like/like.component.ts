import {Component, OnInit} from '@angular/core';

@Component({
  selector: 'app-like',
  templateUrl: './like.component.html',
  styleUrls: ['./like.component.css']
})
export class LikeComponent implements OnInit {

  isLiked = false;
  likeCounter = 0;
  cssClasses = 'fas fa-heart';

  isClicked() {
    if (this.isLiked == false) {
      this.isLiked = true;
      this.likeCounter++;
      this.cssClasses = 'fas fa-heart itsTrue';
    }
    else {
      this.isLiked = false;
      this.likeCounter--;
      this.cssClasses = 'fas fa-heart';
    }
    console.log(this.isLiked)
  }

  constructor() {
  }

  ngOnInit() {
  }
}
