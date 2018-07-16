import React, { Component } from '../../../../../../../../../../../AppData/Local/Microsoft/TypeScript/2.9/node_modules/@types/react';
import ReactDOM from '../../../../../../../../../../../AppData/Local/Microsoft/TypeScript/2.9/node_modules/@types/react-dom';

export default class InviteModal extends Component {
    render() {
        return (
            // <!--Modal that Displays URL and Sends E-mail Invite -->
            <div className="modal fade" id="inviteModal" tabIndex="-1" role="dialog" aria-labelledby="inviteModal" aria-hidden="true">
                <div className="modal-dialog" role="document">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h5 className="modal-title" id="modalInvite">Your Board URL: </h5>
                        </div>

                        {/* <!-- Modal Body --> */}
                        <div className="modal-body">
                            <form>
                                <div className="form-group">
                                    <label htmlFor="recipient-name" className="col-form-label">Send Invites To Your Board: (Use a Comma to Send to Multiple Email Address)</label>
                                    <input type="email" className="form-control" id="inviteEmails" required="required" placeholder="name@example.com, name2@example.com" multiple></input>
                                </div>
                                <div className="form-group">
                                    <label htmlFor="message-text" className="col-form-label">Message:</label>
                                    <textarea className="form-control" id="inviteEmailMsg"></textarea>
                                </div>
                            </form>

                            <div className="modal-footer">
                                {/* <!-- Close Button on Modal --> */}
                                <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                    {/* <!-- <span aria-hidden="true">&times;</span> --> */}
                                </button>
                                {/* <!-- Send Message Button on Modal --> */}
                                <button type="button" className="btn btn-secondary" id="skipBtn" data-dismiss="modal">Skip</button>
                                <button type="button" className="btn btn-primary" id="sendInvites">Send Invite</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        );
    }
}


ReactModal.setAppElement('#main');

class ExampleApp extends React.Component {
  constructor () {
    super();
    this.state = {
      showModal: false
    };
    
    this.handleOpenModal = this.handleOpenModal.bind(this);
    this.handleCloseModal = this.handleCloseModal.bind(this);
  }
  
  handleOpenModal () {
    this.setState({ showModal: true });
  }
  
  handleCloseModal () {
    this.setState({ showModal: false });
  }
  
  render () {
    return (
      <div>
        <button onClick={this.handleOpenModal}>Trigger Modal</button>
        <ReactModal 
           isOpen={this.state.showModal}
           contentLabel="onRequestClose Example"
           onRequestClose={this.handleCloseModal}
        >
          <p>Modal text!</p>
          <button onClick={this.handleCloseModal}>Close Modal</button>
        </ReactModal>
      </div>
    );
  }
}

const props = {};

if (document.getElementById('inviteModal')) {
    ReactDOM.render(<InviteModal {...props}/>, document.getElementById('inviteModal'));
}
