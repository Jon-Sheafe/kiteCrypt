<h1>@deaton747--</h1>
<form class="form-horizontal" id="danielForm" name="danielForm" #danielForm="ngForm" (ngSubmit)="danielMinusMinus();">
	<h2>Make Fun of Daniel</h2>
	<hr />
	<div class="form-group" [ngClass]="{ 'has-error': messageSenderId.touched && messageSenderId.invalid }">
		<label for="messageSenderId">Message Sender Id</label>
		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-user" aria-hidden="true"></i>
			</div>
			<input type="number" name="messageSenderId" id="messageSenderId" class="form-control" min="1" required [(ngModel)]="message.messageSenderId" #messageSenderId="ngModel" />
		</div>
		<div [hidden]="messageSenderId.valid || messageSenderId.pristine" class="alert alert-danger" role="alert">
			<p *ngIf="messageSenderId.errors?.required">Message sender id is required.</p>
			<p *ngIf="messageSenderId.errors?.min">Message sender id must be positive.</p>
		</div>
	</div>
	<div class="form-group" [ngClass]="{ 'has-error': messageReceiverId.touched && messageReceiverId.invalid }">
		<label for="messageReceiverId">Message Receiver Id</label>
		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-user-plus" aria-hidden="true"></i>
			</div>
			<input type="number" name="messageReceiverId" id="messageReceiverId" class="form-control" min="1" required [(ngModel)]="message.messageReceiverId" #messageReceiverId="ngModel" />
		</div>
		<div [hidden]="messageReceiverId.valid || messageReceiverId.pristine" class="alert alert-danger" role="alert">
			<p *ngIf="messageReceiverId.errors?.required">Message receiver id is required.</p>
			<p *ngIf="messageReceiverId.errors?.min">Message receiver id must be positive.</p>
		</div>
	</div>
	<div class="form-group" [ngClass]="{ 'has-error': messageText.touched && messageText.invalid }">
		<label for="messageText">Message Text</label>
		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</div>
			<input type="text" name="messageText" id="messageText" class="form-control" maxlength="64" required [(ngModel)]="message.messageText" #messageText="ngModel" />
		</div>
		<div [hidden]="messageText.valid || messageText.pristine" class="alert alert-danger" role="alert">
			<p *ngIf="messageText.errors?.required">Message text is required.</p>
			<p *ngIf="messageText.errors?.maxlength">Message text is too long.</p>
		</div>
	</div>
	<button type="submit" class="btn btn-info btn-lg" [disabled]="danielForm.invalid"><i class="fa fa-paper-plane"></i> Send Message</button>
	<button type="reset" class="btn btn-warning btn-lg"><i class="fa fa-ban"></i> Cancel</button>
</form>