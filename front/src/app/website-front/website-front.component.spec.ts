import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { WebsiteFrontComponent } from './website-front.component';

describe('WebsiteFrontComponent', () => {
  let component: WebsiteFrontComponent;
  let fixture: ComponentFixture<WebsiteFrontComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ WebsiteFrontComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(WebsiteFrontComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
