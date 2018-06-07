import {Injectable} from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {Observable} from 'rxjs/Observable';
import {BehaviorSubject} from "rxjs/BehaviorSubject";



@Injectable()
export class LoaderService {

    public status: BehaviorSubject<boolean> = new BehaviorSubject<boolean>(false);

    display(value: boolean) {
        this.status.next(value);
    }
}

