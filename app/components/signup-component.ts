import {Component} from "@angular/core";
import {SignUpService} from "../services/signup-service";
import {SignUp} from "../classes/signUp";
import {Status} from "../classes/status";

@Component({
	templateUrl: "./templates/signUp.php"
})

export class signUpComponent {
	loginData: SignUp = new SignUp("", "");
	status: Status = null;

	constructor(private SignUpService: SignUpService) {

	}

	login() : void {
		this.SignUpService.login(this.loginData)
			.subscribe(status => this.status = status);
	}
}