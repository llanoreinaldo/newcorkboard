import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Section1na extends Component {
    render() {
        return (

            <section className="section section-dark">

                <h2>Create Your Board</h2>

                {/* <!-- Create New Board Code --> */}
                <div id="app">
                    <form id="start-board">
                        <div className="container">
                            <div className="flex-row row justify-content-center">
                                <div className="col-6-md col-12-xs" style={{ marginRight: 10 }}>
                                    <input className="new-item form-control" placeholder="Your New Board Name" type="text" id="boardName" required="required"></input>
                                </div>
                                <div className="col-4-md col-12-xs" style={{ marginRight: 10 }}>
                                    <input className="new-item form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Your Email" type="email"
                                        id="ownerEmail" required="required"></input>
                                </div>
                                <div className="col-4-md col-12-xs">
                                {/* Need to change href for proper route */}
                                    <a href="{{ url('/home') }}"> <button value="Create New Board" type="submit" className="btn btn-primary" data-toggle="modal" id="createBoard">Create New Board</button></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </section >
        );
    }
}

if (document.getElementById('section1na')) {
    ReactDOM.render(<Section1na />, document.getElementById('section1na'));
}
