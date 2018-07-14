import React, { Component } from 'react';
import ReactDOM from 'react-dom';

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

if (document.getElementById('inviteModal')) {
    ReactDOM.render(<InviteModal />, document.getElementById('inviteModal'));
}

