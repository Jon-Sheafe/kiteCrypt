import {Injectable} from "@angular/core";
import {Http} from "@angular/http";
import {Observable} from "rxjs/Observable";
import {BaseService} from "./base-service";
import {SignUp} from "../classes/signUp";
import {Status} from "../classes/status";

@Injectable()
export class SignUpService extends BaseService {
	constructor(protected http: Http) {
		super(http);
	}

	private loginUrl = "api/login/";

	signUp(signUp: SignUp) : Observable<Status> {
		return(this.http.post(this.loginUrl, signUp)
			.map(this.extractMessage)
			.catch(this.handleError));
	}
}
