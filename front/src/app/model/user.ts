import {Country} from "./country";
import {Category} from "./category";

export namespace User {
    export class Member {
        pseudo:string;
        email: string;
        password: string;
        first_name: string;
        lastName: string;
        image: string;
        birth_date: string;
        job: string;
        presentation: string;
        country: Country;
        gender: string;
        facebook: string;
        instagram: string;
        linked_in: string;
        url_website: string;
        behance: string;
        dribble: string;
        twitter: string;
        interest_center: string;
        picture: string|any;
        category: Category;
    }
}
