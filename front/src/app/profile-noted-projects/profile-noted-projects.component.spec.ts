import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ProfileNotedProjectsComponent } from './profile-noted-projects.component';

describe('ProfileNotedProjectsComponent', () => {
  let component: ProfileNotedProjectsComponent;
  let fixture: ComponentFixture<ProfileNotedProjectsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ProfileNotedProjectsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ProfileNotedProjectsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
