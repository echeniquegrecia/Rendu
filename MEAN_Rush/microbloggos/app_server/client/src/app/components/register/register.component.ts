import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import {NgForm} from '@angular/forms';
import {NgModule} from '@angular/core';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {

   username:string;
   email:string;
   password:string;

    constructor(private httpClient: HttpClient) {

    }

  ngOnInit() {
  }

    onSubmit() {
        this.httpClient.post('http://localhost:3000/register',{
            username:this.username,
            email: this.email,
            password: this.password
        }).subscribe(
            (data) => {
                console.log(data);
            }
        );

  }
}
