import React from 'react';
import { render } from 'react-dom';
import PropTypes from 'prop-types';
import ModalLauncher from '../Modals/Modal Launcher/ModalLauncher';

export default class CreateBoard extends Component {
  render() {
      return (


  <div className="container">
    <section className="section section-dark">
      <h2>Create Your Board</h2>

      {/* <!-- Create New Board Code --> */}

      <form action="/api/boards" method="POST" id="start-board">
        <div className="container">
          <div className="flex-row row justify-content-center">
            <div className="col-6-md col-12-xs" style={{ marginRight: 10 }}>
              <input
                className="new-item form-control"
                placeholder="Your New Board Name"
                type="text"
                id="boardName"
                required="required"
                name="name"
              />
            </div>
            <div className="col-4-md col-12-xs" style={{ marginRight: 10 }}>
              <input
                className="new-item form-control"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                placeholder="Your Email"
                type="email"
                id="ownerEmail"
                required="required"
                name="email"
              />
            </div>
            <div className="col-4-md col-12-xs">

              <ModalLauncher buttonLabel="Create New Board">
                  <div className="modal-header">
                    <h5 class="modal-title" id="modalInvite">Your Board URL: </h5>
                  </div>

                  {/* <!-- Modal Body --> */}
                  <div className="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Send Invites To Your Board: (Use a Comma to Send to Multiple Email Address)</label>
                        <input type="email" class="form-control" id="inviteEmails" required="required" placeholder="name@example.com, name2@example.com"
                          multiple></input>
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="inviteEmailMsg"></textarea>
                      </div>
                    </form>
                  </div>

                  {/* <div class="modal-footer"> */}
                  <div className="modal-footer">

                    {/* <!-- Close Button on Modal --> */}
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      {/* <!-- <span aria-hidden="true">&times;</span> --> */}
                    </button>
                    {/* <!-- Send Message Button on Modal --> */}
                    <button type="button" class="btn btn-secondary" id="skipBtn" data-dismiss="modal">Skip</button>
                    <button type="button" class="btn btn-primary" id="sendInvites">Send Invite</button>

                  </div>

              </ModalLauncher>

            </div>
          </div>
        </div>
      </form>

    </section>

  </div >
      )
    }
  }

  
if (document.getElementById('createBoard')) {
  ReactDOM.render(<CreateBoardApp />, document.getElementById('create'));
}