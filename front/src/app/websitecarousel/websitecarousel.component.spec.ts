import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { WebsitecarouselComponent } from './websitecarousel.component';

describe('WebsitecarouselComponent', () => {
  let component: WebsitecarouselComponent;
  let fixture: ComponentFixture<WebsitecarouselComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ WebsitecarouselComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(WebsitecarouselComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
