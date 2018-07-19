import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Announcements extends Component {
    render() {
        return (

            //{/*<!--ANNOUNCEMENTS-->*/ }
            <div>
            <div className="main">
                <div className="card sidebar">
                    <div className="card-header" style={{ background: "#001945", color: white }}>
                        Announcements
                            <i className="fas fa-plus-circle newAnn" data-toggle="modal" data-target="#announcementModal"></i>
                    </div>
                    <div className="annoucementCard-body">
                        {/* {{#each board:messages}} */}
                        <p className="card-text" style={{ paddingBottom: 10 }}>
                            <i className="fas fa-dot-circle" style={{ color: '#031244' }}></i>
                            {{ msg }} by
                            <span id="author">{{ author }}</span>
                        </p>
                        {/* {{/each}} */}
                    </div>
                </div>
            </div>

            //{/* <!--dropdown announcement--> */ }

            <div className="card col-lg-12 col-md-4" id="dropAnnounce" style={{ background: "#100F4E", color: white }}>

                <div className="card-header">
                    Announcements
            <i className="fas fa-plus-circle newAnn" data-toggle="modal" data-target="#announcementModal"></i>
                </div>
                <div className="card-body onPlusClose" style={{ overflowY: scroll, position: absolute, height: "100%", width: '95%' }}>
                    {/* {{#each board:messages}} */}
                    <p className="card-text" style={{ paddingBottom: '10px' }}>
                        <i className="fas fa-dot-circle" style={{ color: '#031244' }}></i>
                        {{ msg }} by
                    <span id="author">{{ author }}</span>
                    </p>
                    {/* {{/each}}  */}
                    {/* {{!--<a href="#" className="btn btn-primary">Go somewhere</a> --}} */}
                </div>
            </div >
        </div>
       );
    }
}

if (document.getElementById('announcements')) {
    ReactDOM.render(<Announcements />, document.getElementById('announcements'));
}
