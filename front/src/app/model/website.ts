import {Country} from "./country";
import {Color} from "./color";
import {Technology} from "./technology";
import {Award} from "./award";


export class Website {
  id: number;
  project_name: string;
  project_description: string;
  keywords: string;
  image: string;
  screenshot: string;
  second: string;
  website_type: string;
  activity_area: string;
  target: string;
  project_focus: string;
  project_budget: number;
  languages: string;
  created_by: string;
  client_name: any;
  release_date: string;
  giving_to_agency: string;
  keyFunctionnality: string;
  tech_front: string;
  dev_languages: string;
  framework: string;
  cms: string;
  technical_challenges: string;
  focal_points: string;
  view_number: number;
  like_number: number;
  average_grade: string;
  average_jury_grade: string;
  color: Color;
  technology: Technology;
  award: Award;
  country: Country;
  isNominated: boolean;
}
