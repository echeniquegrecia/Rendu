import { Component, OnInit } from '@angular/core';
import {HttpClient} from "@angular/common/http";

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

    email:string;
    password:string;

  constructor(private httpClient: HttpClient) { }

  ngOnInit() {
  }

    onSubmit() {
        this.httpClient.post('http://localhost:3000/login',{
            email: this.email,
            password: this.password
        }).subscribe(
            (data) => {
                console.log(data);
            },
            error => {
                console.log("error email or password");
            },
        );

}}
