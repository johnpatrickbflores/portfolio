import { Injectable } from '@angular/core';
import { Firestore, addDoc, collectionData, deleteDoc, doc, updateDoc, collection } from '@angular/fire/firestore';
import { docData } from '@angular/fire/firestore';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
export interface Note {
  id?: string;
  title: string;
  description: string;
  startTime: Date;
  endTime: Date;
}

@Injectable({
  providedIn: 'root'
})
export class DataService {

  constructor(private firestore: Firestore) { }

  getNotes(): Observable<Note[]> {
    const notesRef = collection(this.firestore, 'notes');
    return collectionData(notesRef, { idField: 'id' }) as Observable<Note[]>;
  }

  getNoteById(id: string): Observable<Note> {
    const notesRef = doc(this.firestore, `notes/${id}`);
    return docData(notesRef, { idField: 'id' }) as Observable<Note>;
  }
  getDoneNotes(): Observable<Note[]> {
    const doneRef = collection(this.firestore, 'done');
    return collectionData(doneRef, { idField: 'id' }) as Observable<Note[]>;
  }
  
  addNote(note: Note) {
    const notesRef = collection(this.firestore, 'notes');
    return addDoc(notesRef, note);
  }

  deleteNote(note: Note) {
    const noteDocRef = doc(this.firestore, `notes/${note.id}`);
    return deleteDoc(noteDocRef);
  }

  updateNote(note: Note) {
    const noteDocRef = doc(this.firestore, `notes/${note.id}`);
    return updateDoc(noteDocRef, { title: note.title, description: note.description, startTime: note.startTime, endTime: note.endTime});
  }  
  addDone(note: Note) {
    // Remove the ID property since Firestore will auto-generate a new ID for the "done" collection
    const doneNote = { ...note };
    delete doneNote.id;

    const doneRef = collection(this.firestore, 'done');
    return addDoc(doneRef, doneNote);
  }
  addPrioritize(note: Note) {
    // Remove the ID property since Firestore will auto-generate a new ID for the "prioritize" collection
    const prioritizeNote = { ...note };
    delete prioritizeNote.id;

    const prioritizeRef = collection(this.firestore, 'prioritize');
    return addDoc(prioritizeRef, prioritizeNote);
  }
    getPrioritize(): Observable<Note[]> {
    const prioritizeRef = collection(this.firestore, 'prioritize');
    return collectionData(prioritizeRef, { idField: 'id' }) as Observable<Note[]>;
  }
  deletePrioritize(note: Note) {
    const prioritizeDocRef = doc(this.firestore, `prioritize/${note.id}`);
    return deleteDoc(prioritizeDocRef);
  }
  deleteDone(note: Note) {
    const prioritizeDocRef = doc(this.firestore, `done/${note.id}`);
    return deleteDoc(prioritizeDocRef);
  }

}

