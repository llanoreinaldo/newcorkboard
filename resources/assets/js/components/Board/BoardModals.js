import React, { Component } from '../../../../../../../../../../../AppData/Local/Microsoft/TypeScript/2.9/node_modules/@types/react';
import ReactDOM from '../../../../../../../../../../../AppData/Local/Microsoft/TypeScript/2.9/node_modules/@types/react-dom';

export default class BoardModals extends Component {
    render() {
        return (

            // <!-- Modal for new topic -->
            <div className="modal fade" id="topicModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel" aria-hidden="true">
                <div className="modal-dialog" role="document">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h2 className="modal-title" id="topicModalLabel">Tags</h2>
                            <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div className="modal-body modal-post">
                            <input type="text" id="title" placeholder="Tags"></input>
                            <br></br>
                            <br></br>
                        </div>
                        <div className="modal-footer">
                            <button type="button" className="btn btn-primary link">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            
            // <!-- Modal for edit topic -->
            <div className="modal fade" id="editTopicModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel" aria-hidden="true">
                <div className="modal-dialog" role="document">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h2 className="modal-title" id="editTopicModalLabel">Edit Tag:</h2>
                            <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div className="modal-body modal-post">
                            <input type="text" id="editTagModalName"></input>
                            <br></br>
                            <br></br>
                        </div>
                        <div className="modal-footer">
                            <button type="button" className="btn btn-primary link" id="editTagSubmit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            
            // <!--MODAL FOR EDIT CARD editModalLabel-->
            
            <div className="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                <div className="modal-dialog" role="document">
                    <div className="modal-content">
                        <div className="modal-header">
                            <i className="fas fa-pencil-alt">
                                <h2 className="modal-title" id="editModalLabel">Edit Bookmark</h2>
                            </i>
                            <button type="button" className="close" data-dismiss="modal" data-target=".bd-example-modal-lg" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div className="modal-body modal-post">
                            <input type="text" id="editUrl" placeholder="URL"></input>
                            <br></br>
                            <br></br>
                            <input type="text" id="editTitle" placeholder="Title"></input>
                            <br></br>
                            <br></br>
                            <input type="text" id="editDescription" placeholder="Description"></input>
                            <br></br>
                            <br></br>
                            <input type="text" id="editImgUrl" placeholder="Image URL"></input>
                            <br></br>
                            <br></br>
                            <center className="editTags">
                                <h4>Select Tags: </h4>
                                <br><br>
                                <div className="row filterButtons" style="padding-left: 20px">
                                    {{#each board:tags}}
                                    <li style="list-style-type: none; padding-right: 20px; font-size: 15px;">
                                        <label>
                                            <input value="{{id}}" type="checkbox" className="checkboxBtn">{{name}}</input></label>
                                    </li>
                                    {{/each}}
                                </div>
                            </center>
                        </div>
                        <div className="modal-footer">
                            <button type="button" className="btn btn-primary editButton">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            
            {/* <!-- Modal for new post --> */}
            <div className="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="postModalLabel" aria-hidden="true">
                <div className="modal-dialog" role="document">
                    <div className="modal-content">
                        <div className="modal-header">
                            <i className="fas fa-bookmark"></i>
                            <h2 className="modal-title" id="postModalLabel">Add Bookmark</h2>
                            <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div className="modal-body modal-post">
                            <input type="text" id="postUrl" placeholder="URL"></input>
                            <br></br>
                            <br></br>
                            <input type="text" id="postTitle" placeholder="Title"></input>
                            <br></br>
                            <br></br>
                            <input type="text" id="postDescription" placeholder="Description"></input>
                            <br></br>
                            <br></br>
                            <input type="text" id="postImgUrl" placeholder="Image URL"></input>
                            <br></br>
                            <br></br>
                            <center className="postTags">
                                <h4>Select Tags: </h4>
                                <br></br>
                                <div className="row filterButtons" style="padding-left: 20px">
                                    {{#each board.tags}}
                                    <li style="list-style-type: none; padding-right: 20px; font-size: 15px;">
                                        <label>
                                            <input value="{{id}}" type="checkbox" className="checkboxBtn">{{name}}</label>
                                    </li>
                                    {{/each}}
                                </div>
                            </center>
                        </div>
                        <div className="modal-footer">
                            <button type="button" className="btn btn-primary postButton">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            
            {/* <!-- Modal for new announcement --> */}
            <div className="modal fade" id="announcementModal" tabindex="-1" role="dialog" aria-labelledby="announcementModalLabel" aria-hidden="true">
                <div className="modal-dialog" role="document">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h2 className="modal-title" id="announcementModalLabel">New Announcent</h2>
                            <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div className="modal-body modal-post">
                            <textarea rows="4" cols="50" id="postMsg" placeholder="Message"></textarea>
                            <br></br>
                            <br></br>
                        </div>
                        <div className="modal-body modal-post">
                            <input type="text" id="postAuthor" placeholder="Author"></input>
                            <br></br>
                        </div>
                        <div className="modal-footer">
                            <button type="button" className="btn btn-primary announcementButton">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        
        );
    }
}

if (document.getElementById('boardModals')) {
    ReactDOM.render(<BoardModals />, document.getElementById('boardModals'));
}
