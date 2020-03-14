import httpClient from "./http.service";

/**
 * Created by TheCodeholic on 3/7/2020.
 */
const notesService = {
  create(note) {
    return httpClient.post('notes', note)
  },
  get() {
    return httpClient.get('notes?sort=-created_at')
  },
  update(note) {
    return httpClient.put(`notes/${note.id}`, note)
  },
  delete(noteId) {
    return httpClient.delete(`notes/${noteId}`)
  }
};

export default notesService;
