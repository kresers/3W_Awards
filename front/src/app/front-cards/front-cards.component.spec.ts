import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { FrontCardsComponent } from './front-cards.component';

describe('FrontCardsComponent', () => {
  let component: FrontCardsComponent;
  let fixture: ComponentFixture<FrontCardsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ FrontCardsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(FrontCardsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
