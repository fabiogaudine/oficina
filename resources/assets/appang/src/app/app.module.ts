import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import {BrowserAnimationsModule} from '@angular/platform-browser/animations';
import { FlexLayoutModule } from "@angular/flex-layout";
import {MatCardModule} from '@angular/material/card';
import {MatButtonModule } from '@angular/material';
import {MatInputModule} from '@angular/material/input';
import {MatSelectModule} from '@angular/material/select';
import {MatIconModule} from '@angular/material/icon';
import {MatDividerModule} from '@angular/material/divider';
import {MatChipsModule} from '@angular/material/chips';
import {MatToolbarModule} from '@angular/material/toolbar';
import {MatDialogModule} from '@angular/material/dialog';
import {MatBadgeModule} from '@angular/material/badge';

import { AppComponent } from './app.component';
import { HttpClientModule } from '@angular/common/http';

import { GenreComponent } from './genre/genre.component';
import { FilmComponent } from './film/film.component';
import { CommentComponent } from './comment/comment.component';

import { GenreService } from './genre/genre.service';
import { FilmService } from './film/film.service';
import { CommentService } from './comment/comment.service';

import {APP_BASE_HREF} from '@angular/common';
import { AppRoutingModule } from './app-routing.module';

@NgModule({
  declarations: [
    AppComponent,
    FilmComponent,
    GenreComponent,
    CommentComponent,
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    FormsModule, 
    ReactiveFormsModule,
    FlexLayoutModule,
    HttpClientModule,

    MatButtonModule,
    MatInputModule,
    MatSelectModule,
    MatIconModule,
    MatToolbarModule,
    MatCardModule,
    MatDividerModule,
    MatDialogModule,
    MatChipsModule,
    MatBadgeModule,
    AppRoutingModule
  ],
  providers: [
    GenreService,
    FilmService,
    CommentService,
    [{provide: APP_BASE_HREF, useValue: '/appang/app'}]
  ],
  
  entryComponents : [
  ], 
  
  bootstrap: [AppComponent]
})
export class AppModule { }