<?php

class DatagramServerSocket implements ReadableStream
{
    /**
     * Constructor
     *
     * Create and bind the local socket
     *
     * @param $uri
     * @param array $options
     */
    public function __construct($uri, array $options = [])
    {
        // TODO: Implement ctor
    }

    /**
     * Send some data to the remote socket
     *
     * @param string|Datagram $data
     * @param string $address
     * @param int $flags
     */
    public function send($data, $address = null, $flags = 0)
    {
        // TODO: Implement send() method.
    }

    /**
     * Receive some data from a remote socket
     *
     * @param int $length
     * @param int $flags
     * @return Datagram
     */
    public function recv($length, $flags = 0)
    {
        // TODO: Implement recv() method.
    }

    /**
     * Read up to $length bytes of data from the stream
     *
     * @see fread()
     * @see stream_get_contents()
     * @param int $length
     * @return string|false
     */
    public function read($length = null)
    {
        // TODO: Implement read() method.
    }

    /**
     * Read a line from the stream
     *
     * @see fgets()
     * @see stream_get_line()
     * @param int $length
     * @param string $ending
     * @return string|false
     */
    public function readLine($length = null, $ending = null)
    {
        // TODO: Implement readLine() method.
    }

    /**
     * Copy data from this stream to another until EOF
     *
     * @see stream_copy_to_stream()
     * @param WriteableStream $stream
     */
    public function pipeTo(WriteableStream $stream)
    {
        // TODO: Implement pipeTo() method.
    }

    /**
     * @return bool
     */
    public function isEOF()
    {
        // TODO: Implement isEOF() method.
    }
}