import {Component, OnInit} from '@angular/core';
import {FormBuilder, FormGroup, Validators} from '@angular/forms';
import {UserService} from '../../providers/user-service.service';
import {Router} from '@angular/router';
import {AlertService} from '../../providers/alert.service';
import {ModalDismissReasons, NgbModal, NgbModalRef} from "@ng-bootstrap/ng-bootstrap";
@Component({
    selector: 'app-register',
    templateUrl: './register.component.html',
    styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {
    registerForm: FormGroup;

    model: any = {};
    loading = false;
    modalReference: NgbModalRef;
    closeResult: string;

    constructor(private formBuilder: FormBuilder, private router: Router,
                private userService: UserService, private alertService: AlertService,public modalService:NgbModal) {
    }

    ngOnInit() {
    }

    register() {
        this.loading = true;
        this.userService.create(this.model)
            .subscribe(
                data => {
                    this.alertService.success('Inscription effectué avec succès', true);
                    this.loading = false;
                    this.modalReference.close();
                },
                error => {
                    this.alertService.error('Oups, une erreur');
                    this.loading = false;
                    this.modalReference.close();
                });
    }

    open(content) {
        this.modalReference = this.modalService.open(content);
        this.modalReference.result.then((result) => {
            this.closeResult = `Closed with: ${result}`;
        }, (reason) => {
            this.closeResult = `Dismissed ${this.getDismissReason(reason)}`;
        });
    }

    private getDismissReason(reason: any): string {
        if (reason === ModalDismissReasons.ESC) {
            return 'by pressing ESC';
        } else if (reason === ModalDismissReasons.BACKDROP_CLICK) {
            return 'by clicking on a backdrop';
        } else {
            return `with: ${reason}`;
        }
    }
}
