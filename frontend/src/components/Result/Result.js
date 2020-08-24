import React from 'react';
import { Link } from 'react-router-dom';
import './Result.scss';

const Result = ({ Artist, Album, Plays, Slug }) => {
    
    const TheAlbum = () => {
        if (Album) {
            return (
                <div className="item-title">{ Album }</div>
            )
        }
        return null;
    }

    const TheArtist = () => {
        if (Album) {
            return (
                <div className="artist-title">{ Artist }</div>
            )
        }
        return (
            <div className="item-title">{ Artist }</div>
        );
    }

    const PlayCount = () => {
        if (!Plays) {
            return (
                <div className="playCount">0 Plays</div>
            )
        }
        return (
            <div className="playCount">{ Plays } Plays</div>
        )
    }

    const TheSlug = () => {
        if (Album) {
            return `/albums/${Slug}`
        }
        return `/artists/${Slug}`
    }
    return (
        <div className="result">
        <Link to={TheSlug}>
            <div className="result-img"></div>
            <TheAlbum />
            <TheArtist />
            <PlayCount />
        </Link>
        </div>
    )
}

export default Result;