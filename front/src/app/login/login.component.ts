import {Component, OnInit} from '@angular/core';
import {FormBuilder, FormGroup, Validators} from '@angular/forms';
import {AuthenticationService} from '../../providers/authentication.service';
import {Router, RouterModule} from '@angular/router';
import {AlertService} from "../../providers/alert.service";
import {ModalDismissReasons, NgbModal, NgbModalRef} from "@ng-bootstrap/ng-bootstrap";


@Component({
    selector: 'app-login',
    templateUrl: './login.component.html',
    styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
    loginForm: FormGroup;
    error: string = '';
    loading: boolean;
    showModal: boolean;
    closeResult: string;
    modalReference: NgbModalRef;

    constructor(private formBuilder: FormBuilder,
                private authenticationService: AuthenticationService,
                private router: Router,
                public  alertService: AlertService,
                public modalService: NgbModal) {
        this.loginForm = formBuilder.group({
            'username': ['', Validators.required],
            'password': ['', Validators.required]
        });
    }

    ngOnInit() {
    }

    onSubmit() {
        this.loading = true;
        this.authenticationService.authenticate(this.loginForm.value)
            .subscribe(
                data => {
                    localStorage.setItem('id_token', data.token);
                    this.router.navigate(['home']);
                    this.alertService.success('Connexion réussi ! ', true);
                    this.loading = false;
                    this.showModal = false;
                    this.modalReference.close();
                },
                error => {
                    this.alertService.error('Identifiant incorrect ! ', true);
                    this.loading = false;
                    this.showModal = false;
                }
            );
    }
    show() {
        this.showModal = true;
    }

    hide() {
        this.showModal = false;
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
            return  `with: ${reason}`;
        }
    }
}
